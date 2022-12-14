<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FolderBookmarksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $bookmarks = BookmarkResource::collection($this->bookmarks()->get());
        $children = FolderResource::collection($this->children()->get());
        return [
            "id" => $this->id,
            "name" => $this->name,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "bookmarks" => $bookmarks,
            "children" => $children
        ];
    }
}
