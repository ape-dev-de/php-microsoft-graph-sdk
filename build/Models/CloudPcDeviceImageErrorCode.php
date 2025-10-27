<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDeviceImageErrorCode - Enum
 */
enum CloudPcDeviceImageErrorCode: string
{
    case INTERNALSERVERERROR = 'internalServerError';
    case SOURCEIMAGENOTFOUND = 'sourceImageNotFound';
    case OSVERSIONNOTSUPPORTED = 'osVersionNotSupported';
    case SOURCEIMAGEINVALID = 'sourceImageInvalid';
    case SOURCEIMAGENOTGENERALIZED = 'sourceImageNotGeneralized';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case VMALREADYAZUREADJOINED = 'vmAlreadyAzureAdjoined';
    case PAIDSOURCEIMAGENOTSUPPORT = 'paidSourceImageNotSupport';
    case SOURCEIMAGENOTSUPPORTCUSTOMIZEVMNAME = 'sourceImageNotSupportCustomizeVMName';
    case SOURCEIMAGESIZEEXCEEDSLIMITATION = 'sourceImageSizeExceedsLimitation';
}
