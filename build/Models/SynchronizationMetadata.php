<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationMetadata - Enum
 */
enum SynchronizationMetadata: string
{
    case GALLERYAPPLICATIONIDENTIFIER = 'GalleryApplicationIdentifier';
    case GALLERYAPPLICATIONKEY = 'GalleryApplicationKey';
    case ISOAUTHENABLED = 'IsOAuthEnabled';
    case ISSYNCHRONIZATIONAGENTASSIGNMENTREQUIRED = 'IsSynchronizationAgentAssignmentRequired';
    case ISSYNCHRONIZATIONAGENTREQUIRED = 'IsSynchronizationAgentRequired';
    case ISSYNCHRONIZATIONINPREVIEW = 'IsSynchronizationInPreview';
    case OAUTHSETTINGS = 'OAuthSettings';
    case SYNCHRONIZATIONLEARNMOREIBIZAFWLINK = 'SynchronizationLearnMoreIbizaFwLink';
    case CONFIGURATIONFIELDS = 'ConfigurationFields';
}
