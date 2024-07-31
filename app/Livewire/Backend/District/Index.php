<?php

namespace App\Livewire\Backend\District;

use App\Models\District;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "District", $addData = true, $updateData = false, $deleteId, $shortby = "id", $short = "DESC", $search = "";
    // page field
    public $name, $districtId, $district;


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
            'name' => 'required|string|max:255|unique:districts',
        ]);

        try {

            District::create([
                'name' => $this->name,
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
            $district = District::findOrFail($id);
            $this->district = $district;
            $this->name = $district->name;
            $this->districtId = $district->id;

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
        $district = District::find($this->districtId);

        $this->validate([
            'name' => 'required|string|max:255|unique:districts,name,' . $district->id,
        ]);

        try {

            $district->update([
                'name' => $this->name,
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
            $district = District::find($this->deleteId);
            $district->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.district.index', [
            'districts' => District::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
        ]);
    }
}
