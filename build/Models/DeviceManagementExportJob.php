<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExportJob
 */
class DeviceManagementExportJob
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Time that the exported report expires */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** Filters applied on the report */
        public ?string $filter = null,
        /**  */
        public ?string $format = null,
        /**  */
        public ?string $localizationType = null,
        /** Name of the report */
        public ?string $reportName = null,
        /** Time that the exported report was requested */
        public ?\DateTimeInterface $requestDateTime = null,
        /** @var string[] Columns selected from the report */
        public array $select = [],
        /** A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id. */
        public ?string $snapshotId = null,
        /**  */
        public ?string $status = null,
        /** Entity representing a job to export a report. */
        public ?string $url = null
    ) {}
}
