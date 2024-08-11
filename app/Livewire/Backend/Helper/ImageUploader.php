<?php

namespace App\Livewire\Backend\Helper;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUploader extends Component
{
    use WithFileUploads;

    public $image, $uploaded, $uploadImage = false;


    /**
     * Active image upload and preview
     * @return void
     */
    public function activeImageUpload()
    {
        $this->uploadImage = true;
    
    }
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {
        $this->uploadImage = false;
    
    }

    public function mount($uploaded)
    {
       $this->uploaded = $uploaded;
    }

    public function render()
    {
        return view('livewire.backend.helper.image-uploader');
    }
}
