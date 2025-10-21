<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceVisualization
 */
class ResourceVisualization
{
    /**
     * A string describing where the item is stored. For example, the name of a SharePoint site or the user name identifying the owner of the OneDrive storing the item.
     */
    private ?string $containerDisplayName;

    /**
     * Can be used for filtering by the type of container in which the file is stored. Such as Site or OneDriveBusiness.
     */
    private ?string $containerType;

    /**
     * A path leading to the folder in which the item is stored.
     */
    private ?string $containerWebUrl;

    /**
     * The item's media type. Can be used for filtering for a specific type of file based on supported IANA Media Mime Types. Not all Media Mime Types are supported.
     */
    private ?string $mediaType;

    /**
     * A URL leading to the preview image for the item.
     */
    private ?string $previewImageUrl;

    /**
     * A preview text for the item.
     */
    private ?string $previewText;

    /**
     * The item's title text.
     */
    private ?string $title;

    /**
     * The item's media type. Can be used for filtering for a specific file based on a specific type. See the section Type property values for supported types.
     */
    private ?string $type;


    public function getContainerDisplayName(): ?string
    {
        return $this->containerDisplayName;
    }

    public function setContainerDisplayName(?string $containerDisplayName): self
    {
        $this->containerDisplayName = $containerDisplayName;
        return $this;
    }

    public function getContainerType(): ?string
    {
        return $this->containerType;
    }

    public function setContainerType(?string $containerType): self
    {
        $this->containerType = $containerType;
        return $this;
    }

    public function getContainerWebUrl(): ?string
    {
        return $this->containerWebUrl;
    }

    public function setContainerWebUrl(?string $containerWebUrl): self
    {
        $this->containerWebUrl = $containerWebUrl;
        return $this;
    }

    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    public function setMediaType(?string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function getPreviewImageUrl(): ?string
    {
        return $this->previewImageUrl;
    }

    public function setPreviewImageUrl(?string $previewImageUrl): self
    {
        $this->previewImageUrl = $previewImageUrl;
        return $this;
    }

    public function getPreviewText(): ?string
    {
        return $this->previewText;
    }

    public function setPreviewText(?string $previewText): self
    {
        $this->previewText = $previewText;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
