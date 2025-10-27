<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReportFileFormat - Enum
 * Possible values for the file format of a report to be exported.
 */
enum DeviceManagementReportFileFormat: string
{
    case CSV = 'csv';
    case PDF = 'pdf';
    case JSON = 'json';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
