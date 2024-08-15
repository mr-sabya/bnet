<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Image;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads, WithPagination, WithoutUrlPagination;
    public $page = "Setting", $setting;
    public $site_title, $tagline, $logo, $white_logo, $favicon, $address, $email, $phone, $opening_time, $facebook, $twitter, $instagram, $linkedin;
    public $fieldName, $selectId, $logoSelectID, $whitelogoSelectID, $faviconSelectID, $showModal = false;

    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage($image)
    {
        if ($image == 'logo') {
            $this->logoSelectID = '';
            if ($this->setting->logo != null) {
                $this->logo = '';
            }
        } elseif ($image == 'whitelogo') {
            $this->whitelogoSelectID = '';
            if ($this->setting->white_logo != null) {
                $this->white_logo = '';
            }
        } elseif ($image == 'favicon') {
            $this->faviconSelectID = '';
            if ($this->setting->favicon != null) {
                $this->favicon = '';
            }
        }
    }

    public function openImageModal($fieldName)
    {
        $this->fieldName = $fieldName;

        if ($fieldName == 'logo') {
            $this->selectId = $this->logoSelectID;
        } elseif ($fieldName == 'white_logo') {
            $this->selectId = $this->whitelogoSelectID;
        } elseif ($fieldName == 'favicon') {
            $this->selectId = $this->faviconSelectID;
        }

        $this->dispatch('open-modal');
    }

    public function selectImage($id)
    {
        $image = Image::find($id);
        $this->selectId = $image->id;

        if ($this->fieldName == 'logo') {
            $this->logoSelectID = $image->id;
            $this->logo = $image->image;
        }


        if ($this->fieldName == 'white_logo') {
            $this->whitelogoSelectID = $image->id;
            $this->white_logo = $image->image;
        }

        if ($this->fieldName == 'favicon') {
            $this->faviconSelectID = $image->id;
            $this->favicon = $image->image;
        }
    }


    public function mount()
    {
        $setting = Setting::where('id', 1)->first();
        $this->setting = $setting;
        $this->site_title = $setting->site_title;
        $this->tagline = $setting->tagline;
        $this->address = $setting->address;
        $this->email = $setting->email;
        $this->phone = $setting->phone;
        $this->opening_time = $setting->opening_time;
        $this->facebook = $setting->facebook;
        $this->twitter = $setting->twitter;
        $this->instagram = $setting->instagram;
        $this->linkedin = $setting->linkedin;
    }

    public function save()
    {
        $setting = Setting::where('id', 1)->first();

        if($this->logo){
            $logo_name = $this->logo;
        }else{
            $logo_name = $setting->logo;
        }

        if($this->white_logo){
            $white_logo_name = $this->white_logo;
        }else{
            $white_logo_name = $setting->white_logo;
        }

        if($this->favicon){
            $favicon_name = $this->favicon;
        }else{
            $favicon_name = $setting->favicon;
        }

        $setting->update([
            'site_title' => $this->site_title,
            'tagline' => $this->tagline,
            'logo' => $logo_name,
            'white_logo' => $white_logo_name,
            'favicon' => $favicon_name,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'opening_time' => $this->opening_time,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => 'Setting has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.setting.index', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }
}
