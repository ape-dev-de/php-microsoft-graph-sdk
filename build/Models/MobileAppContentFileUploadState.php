<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContentFileUploadState - Enum
 * Contains properties for upload request states.
 */
enum MobileAppContentFileUploadState: string
{
    case SUCCESS = 'success';
    case TRANSIENTERROR = 'transientError';
    case ERROR = 'error';
    case UNKNOWN = 'unknown';
    case AZURESTORAGEURIREQUESTSUCCESS = 'azureStorageUriRequestSuccess';
    case AZURESTORAGEURIREQUESTPENDING = 'azureStorageUriRequestPending';
    case AZURESTORAGEURIREQUESTFAILED = 'azureStorageUriRequestFailed';
    case AZURESTORAGEURIREQUESTTIMEDOUT = 'azureStorageUriRequestTimedOut';
    case AZURESTORAGEURIRENEWALSUCCESS = 'azureStorageUriRenewalSuccess';
    case AZURESTORAGEURIRENEWALPENDING = 'azureStorageUriRenewalPending';
    case AZURESTORAGEURIRENEWALFAILED = 'azureStorageUriRenewalFailed';
    case AZURESTORAGEURIRENEWALTIMEDOUT = 'azureStorageUriRenewalTimedOut';
    case COMMITFILESUCCESS = 'commitFileSuccess';
    case COMMITFILEPENDING = 'commitFilePending';
    case COMMITFILEFAILED = 'commitFileFailed';
    case COMMITFILETIMEDOUT = 'commitFileTimedOut';
}
