<?php

namespace App\Livewire\Backend\Package;

use App\Models\Package;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;
    public $page = "Package", $addData = true, $updateData = false, $deleteId, $shortby = "id", $short = "ASC", $search = "";
    // page field
    public $name, $bandwidth, $price, $feature_1, $feature_2, $feature_3, $feature_4, $feature_5, $feature_6, $feature_7, $packageId, $package;


    public function clearShort()
    {
        $this->shortby = "id";
        $this->short = "ASC";
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->bandwidth = '';
        $this->price = '';
        $this->feature_1 = '';
        $this->feature_2 = '';
        $this->feature_3 = '';
        $this->feature_4 = '';
        $this->feature_5 = '';
        $this->feature_6 = '';
        $this->feature_7 = '';
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
            'name' => 'required|string|max:255',
            'bandwidth' => 'required|max:5',
            'price' => 'required|max:5',
            'feature_1' => 'required|string|max:255',
            'feature_2' => 'required|string|max:255',
            'feature_3' => 'required|string|max:255',
            'feature_4' => 'required|string|max:255',
            'feature_5' => 'required|string|max:255',
            'feature_6' => 'nullable|string|max:255',
            'feature_7' => 'nullable|string|max:255',
        ]);

        try {

            Package::create([
                'name' => $this->name,
                'bandwidth' => $this->bandwidth,
                'price' => $this->price,
                'feature_1' => $this->feature_1,
                'feature_2' => $this->feature_2,
                'feature_3' => $this->feature_3,
                'feature_4' => $this->feature_4,
                'feature_5' => $this->feature_5,
                'feature_6' => $this->feature_6,
                'feature_7' => $this->feature_7,
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
            $package = Package::findOrFail($id);
            $this->package = $package;
            $this->name = $package->name;
            $this->bandwidth = $package->bandwidth;
            $this->price = $package->price;
            $this->feature_1 = $package->feature_1;
            $this->feature_2 = $package->feature_2;
            $this->feature_3 = $package->feature_3;
            $this->feature_4 = $package->feature_4;
            $this->feature_5 = $package->feature_5;
            $this->feature_6 = $package->feature_6;
            $this->feature_7 = $package->feature_7;
            $this->packageId = $package->id;

            $this->updateData = true;
            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function copy($id)
    {
        try {
            $package = Package::findOrFail($id);
            $this->package = $package;
            $this->name = $package->name;
            $this->bandwidth = $package->bandwidth;
            $this->price = $package->price;
            $this->feature_1 = $package->feature_1;
            $this->feature_2 = $package->feature_2;
            $this->feature_3 = $package->feature_3;
            $this->feature_4 = $package->feature_4;
            $this->feature_5 = $package->feature_5;
            $this->feature_6 = $package->feature_6;
            $this->feature_7 = $package->feature_7;

            $this->addData = true;
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
        $package = Package::find($this->packageId);

        $this->validate([
            'name' => 'required|string|max:255',
            'bandwidth' => 'required|max:5',
            'price' => 'required|max:5',
            'feature_1' => 'required|string|max:255',
            'feature_2' => 'required|string|max:255',
            'feature_3' => 'required|string|max:255',
            'feature_4' => 'required|string|max:255',
            'feature_5' => 'required|string|max:255',
            'feature_6' => 'nullable|string|max:255',
            'feature_7' => 'nullable|string|max:255',
        ]);

        try {

            $package->update([
                'name' => $this->name,
                'bandwidth' => $this->bandwidth,
                'price' => $this->price,
                'feature_1' => $this->feature_1,
                'feature_2' => $this->feature_2,
                'feature_3' => $this->feature_3,
                'feature_4' => $this->feature_4,
                'feature_5' => $this->feature_5,
                'feature_6' => $this->feature_6,
                'feature_7' => $this->feature_7,
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
            $package = Package::find($this->deleteId);
            $package->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.package.index', [
            'packages' => Package::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
        ]);
    }
}
