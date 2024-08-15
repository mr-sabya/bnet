<?php

namespace App\Livewire\Backend\Image;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $page = "Media", $addData = true, $updateData = false, $deleteId, $uploadImage = true;
    // page field
    public $name, $image, $alt_text, $link, $media, $mediaId;


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->image = '';
        $this->alt_text = '';
        $this->link = '';
    }


    /**
     * Active image upload and preview
     * @return void
     */
    public function activeImageUpload()
    {
        $this->uploadImage = true;
    }

    public function resetImage()
    {
        $this->uploadImage = false;
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
            'alt_text' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {

            if ($this->image) {
                $image_name = $this->image->getClientOriginalName();
                $image_url = "public/site";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name = null;
            }

            Image::create([
                'name' => $this->name,
                'image' => $file_name,
                'alt_text' => $this->alt_text,
                'link' => $this->link,
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
            $media = Image::findOrFail($id);
            $this->media = $media;
            $this->mediaId = $media->id;
            $this->name = $media->name;
            $this->alt_text = $media->alt_text;
            $this->link = $media->link;

            $this->uploadImage = false;
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
        $media = Image::find($this->mediaId);

        $this->validate([
            'name' => 'required|string|max:255',
            'alt_text' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {

            if ($this->image) {
                $image_name = $this->image->getClientOriginalName();
                $image_url = "public/site";
                $this->image->storeAs($image_url, $image_name);
                $file_name = $image_url . '/' . $image_name;
            } else {
                $file_name = $media->image;
            }

            $media->update([
                'name' => $this->name,
                'image' => $file_name,
                'alt_text' => $this->alt_text,
                'link' => $this->link,
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
            $media = Image::find($this->mediaId);
            $media->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.image.index', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
