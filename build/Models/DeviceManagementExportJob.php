<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExportJob
 */
class DeviceManagementExportJob
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Time that the exported report expires */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Filters applied on the report */
    public ?string $filter = null;

    /**  */
    public ?DeviceManagementReportFileFormat $format = null;

    /**  */
    public ?DeviceManagementExportJobLocalizationType $localizationType = null;

    /** Name of the report */
    public ?string $reportName = null;

    /** Time that the exported report was requested */
    public ?\DateTimeInterface $requestDateTime = null;

    /** 
     * Columns selected from the report
     * @var string[]
     */
    public array $select = [];

    /** A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id. */
    public ?string $snapshotId = null;

    /**  */
    public ?DeviceManagementReportStatus $status = null;

    /** Temporary location of the exported report */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['filter'])) {
            $this->filter = $data['filter'];
        }
        if (isset($data['format'])) {
            $this->format = is_string($data['format']) ? DeviceManagementReportFileFormat::tryFrom($data['format']) : $data['format'];
        }
        if (isset($data['localizationType'])) {
            $this->localizationType = is_string($data['localizationType']) ? DeviceManagementExportJobLocalizationType::tryFrom($data['localizationType']) : $data['localizationType'];
        }
        if (isset($data['reportName'])) {
            $this->reportName = $data['reportName'];
        }
        if (isset($data['requestDateTime'])) {
            $this->requestDateTime = is_string($data['requestDateTime']) ? new \DateTimeImmutable($data['requestDateTime']) : $data['requestDateTime'];
        }
        if (isset($data['select'])) {
            $this->select = $data['select'];
        }
        if (isset($data['snapshotId'])) {
            $this->snapshotId = $data['snapshotId'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? DeviceManagementReportStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
