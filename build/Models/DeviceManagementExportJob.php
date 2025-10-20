<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExportJob
 */
class DeviceManagementExportJob
{
    /**
     * Time that the exported report expires
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Filters applied on the report
     */
    private ?string $filter;

    /**
     */
    private ?string $format;

    /**
     */
    private ?string $localizationType;

    /**
     * Name of the report
     */
    private ?string $reportName;

    /**
     * Time that the exported report was requested
     */
    private ?\DateTimeInterface $requestDateTime;

    /**
     * Columns selected from the report
     */
    private ?string $select;

    /**
     * A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     */
    private ?string $snapshotId;

    /**
     */
    private ?string $status;

    /**
     * Entity representing a job to export a report.
     */
    private ?string $url;

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getFilter(): ?string
    {
        return $this->filter;
    }

    public function setFilter(?string $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getLocalizationType(): ?string
    {
        return $this->localizationType;
    }

    public function setLocalizationType(?string $localizationType): self
    {
        $this->localizationType = $localizationType;
        return $this;
    }

    public function getReportName(): ?string
    {
        return $this->reportName;
    }

    public function setReportName(?string $reportName): self
    {
        $this->reportName = $reportName;
        return $this;
    }

    public function getRequestDateTime(): ?\DateTimeInterface
    {
        return $this->requestDateTime;
    }

    public function setRequestDateTime(?\DateTimeInterface $requestDateTime): self
    {
        $this->requestDateTime = $requestDateTime;
        return $this;
    }

    public function getSelect(): ?string
    {
        return $this->select;
    }

    public function setSelect(?string $select): self
    {
        $this->select = $select;
        return $this;
    }

    public function getSnapshotId(): ?string
    {
        return $this->snapshotId;
    }

    public function setSnapshotId(?string $snapshotId): self
    {
        $this->snapshotId = $snapshotId;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
