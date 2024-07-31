<?php

namespace App\Livewire\Backend\City;

use App\Models\City;
use App\Models\District;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "City", $addData = true, $updateData = false, $deleteId, $shortby = "id", $short = "DESC", $search = "";
    // page field
    public $name, $cityId, $city, $district_id;


    public function clearShort()
    {
        $this->shortby = "id";
        $this->short = "DESC";
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->district_id = '';
    }


    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addData = true;
        $this->updateData = false;
    }




    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:cities',
            'district_id' => 'required',
        ]);

        try {

            City::create([
                'name' => $this->name,
                'district_id' => $this->district_id,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);

            $this->resetFields();
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $city = City::findOrFail($id);
            $this->city = $city;
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->district_id = $city->district_id;

            $this->updateData = true;
            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }



    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $city = City::find($this->cityId);

        $this->validate([
            'name' => 'required|string|max:255|unique:cities,name,' . $city->id,
            'district_id' => 'required',
        ]);

        try {

            $city->update([
                'name' => $this->name,
                'district_id' => $this->district_id,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);

            $this->resetFields();
            $this->updateData = false;
            $this->addData = true;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    public function getDeleteId($id)
    {
        $this->deleteId = $id;
    }


    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete()
    {
        try {
            $city = City::find($this->deleteId);
            $city->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.city.index', [
            'cities' => City::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
            'districts' => District::orderBy('name', 'ASC')->get(),
        ]);
    }
}
