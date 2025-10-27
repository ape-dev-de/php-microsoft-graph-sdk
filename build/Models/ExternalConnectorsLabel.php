<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsLabel - Enum
 */
enum ExternalConnectorsLabel: string
{
    case TITLE = 'title';
    case URL = 'url';
    case CREATEDBY = 'createdBy';
    case LASTMODIFIEDBY = 'lastModifiedBy';
    case AUTHORS = 'authors';
    case CREATEDDATETIME = 'createdDateTime';
    case LASTMODIFIEDDATETIME = 'lastModifiedDateTime';
    case FILENAME = 'fileName';
    case FILEEXTENSION = 'fileExtension';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ICONURL = 'iconUrl';
}
