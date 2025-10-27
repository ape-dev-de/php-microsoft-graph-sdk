<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationTemplateBrandingOptions - Enum
 * Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
 */
enum NotificationTemplateBrandingOptions: string
{
    case NONE = 'none';
    case INCLUDECOMPANYLOGO = 'includeCompanyLogo';
    case INCLUDECOMPANYNAME = 'includeCompanyName';
    case INCLUDECONTACTINFORMATION = 'includeContactInformation';
    case INCLUDECOMPANYPORTALLINK = 'includeCompanyPortalLink';
    case INCLUDEDEVICEDETAILS = 'includeDeviceDetails';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
