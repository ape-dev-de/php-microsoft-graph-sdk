<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJob
 */
class SynchronizationJob
{
    /**
     * Schedule used to run the job. Read-only.
     */
    private ?string $schedule;

    /**
     * Status of the job, which includes when the job was last run, current job state, and errors.
     */
    private ?string $status;

    /**
     * Settings associated with the job. Some settings are inherited from the template.
     */
    private array $synchronizationJobSettings = [];

    /**
     * Identifier of the synchronization template this job is based on.
     */
    private ?string $templateId;

    /**
     * The bulk upload operation for the job.
     */
    private ?string $bulkUpload;

    /**
     * The synchronization schema configured for the job.
     */
    private ?string $schema;

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(?string $schedule): self
    {
        $this->schedule = $schedule;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getSynchronizationJobSettings(): array
    {
        return $this->synchronizationJobSettings;
    }

    public function setSynchronizationJobSettings(array $synchronizationJobSettings): self
    {
        $this->synchronizationJobSettings = $synchronizationJobSettings;
        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    public function getBulkUpload(): ?string
    {
        return $this->bulkUpload;
    }

    public function setBulkUpload(?string $bulkUpload): self
    {
        $this->bulkUpload = $bulkUpload;
        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

}
