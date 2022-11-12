<?php

namespace App\Http\Livewire\Backend\ProductInfo;
use App\Models\Backend\ProductInfo\Package as packageModal;
use App\Models\Backend\ProductInfo\Product;
use Livewire\WithFileUploads;
use Livewire\Component;
class Package extends Component
{
    use WithFileUploads;
    public $name;
    public $price;
    public $title;
    public $description;
    public $product_id;
    public $is_active = 1;
    public $PackageId = null;
    public $QueryUpdate = null;
    public $DeleteId;

    public function ConfirmDelete(){
        $this->categoryDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }
    public function categoryEdit($id)
    {
        $this->QueryUpdate = ProductInfoCategory::find($id);
        $this->CategoryId = $this->QueryUpdate->id;
        $this->code = $this->QueryUpdate->code;
        $this->name = $this->QueryUpdate->name;
        // $this->image1 = $this->QueryUpdate->image1;
        // $this->image2 = $this->QueryUpdate->image2;
        $this->description = $this->QueryUpdate->description;
        $this->is_active = $this->QueryUpdate->is_active;
        $this->top_show = $this->QueryUpdate->top_show;

        $this->emit('modal', 'categoryModal');
    }

    public function categoryDelete($id)
    {
        ProductInfoCategory::find($id)->delete();

        $this->emit('success', [
            'text' => 'Category Deleted Successfully',
        ]);
    }

    public function packageModal()
    {
        // $this->reset();
        $this->emit('modal', 'packageModal');
    }

    public function packageSave()
    {
        $this->validate([
            // 'code' => 'required',
            'name' => 'required',
            'is_active' => 'required',
        ]);

        if ($this->PackageId) {
            $Query = packageModal::find($this->CategoryId);
        } else {
            $Query = new packageModal();
        }
        $Query->name = $this->name;
        $Query->price = $this->price;
        $Query->title = $this->title;
        $Query->description = $this->description;
        $Query->is_active = $this->is_active;
        $Query->save();
        $this->reset();
        $this->packageModal();
        $this->emit('success', [
            'text' => 'Package Created Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.product-info.package',[
            'products' => Product::get(),
        ]);
    }
}
