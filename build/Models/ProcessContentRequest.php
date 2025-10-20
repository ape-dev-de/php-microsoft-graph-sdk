<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentRequest
 */
class ProcessContentRequest
{
    /**
     */
    private ?string $activityMetadata;

    /**
     * A collection of content entries to be processed. Each entry contains the content itself and its metadata. Use conversation metadata for content like prompts and responses and file metadata for files. Required.
     */
    private array $contentEntries = [];

    /**
     */
    private ?string $deviceMetadata;

    /**
     */
    private ?string $integratedAppMetadata;

    /**
     * Metadata about the protected application making the request. Required.
     */
    private ?string $protectedAppMetadata;

    public function getActivityMetadata(): ?string
    {
        return $this->activityMetadata;
    }

    public function setActivityMetadata(?string $activityMetadata): self
    {
        $this->activityMetadata = $activityMetadata;
        return $this;
    }

    public function getContentEntries(): array
    {
        return $this->contentEntries;
    }

    public function setContentEntries(array $contentEntries): self
    {
        $this->contentEntries = $contentEntries;
        return $this;
    }

    public function getDeviceMetadata(): ?string
    {
        return $this->deviceMetadata;
    }

    public function setDeviceMetadata(?string $deviceMetadata): self
    {
        $this->deviceMetadata = $deviceMetadata;
        return $this;
    }

    public function getIntegratedAppMetadata(): ?string
    {
        return $this->integratedAppMetadata;
    }

    public function setIntegratedAppMetadata(?string $integratedAppMetadata): self
    {
        $this->integratedAppMetadata = $integratedAppMetadata;
        return $this;
    }

    public function getProtectedAppMetadata(): ?string
    {
        return $this->protectedAppMetadata;
    }

    public function setProtectedAppMetadata(?string $protectedAppMetadata): self
    {
        $this->protectedAppMetadata = $protectedAppMetadata;
        return $this;
    }

}
