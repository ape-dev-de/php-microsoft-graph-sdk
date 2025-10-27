<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadBrand - Enum
 */
enum PayloadBrand: string
{
    case UNKNOWN = 'unknown';
    case OTHER = 'other';
    case AMERICANEXPRESS = 'americanExpress';
    case CAPITALONE = 'capitalOne';
    case DHL = 'dhl';
    case DOCUSIGN = 'docuSign';
    case DROPBOX = 'dropbox';
    case FACEBOOK = 'facebook';
    case FIRSTAMERICAN = 'firstAmerican';
    case MICROSOFT = 'microsoft';
    case NETFLIX = 'netflix';
    case SCOTIABANK = 'scotiabank';
    case SENDGRID = 'sendGrid';
    case STEWARTTITLE = 'stewartTitle';
    case TESCO = 'tesco';
    case WELLSFARGO = 'wellsFargo';
    case SYRINXCLOUD = 'syrinxCloud';
    case ADOBE = 'adobe';
    case TEAMS = 'teams';
    case ZOOM = 'zoom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
