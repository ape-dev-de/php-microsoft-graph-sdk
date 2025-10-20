<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingLink resources
 *
 * Available select fields:
 * - application
 * - preventsDownload
 * - scope
 * - type
 * - webHtml
 * - webUrl
 */
class SharingLinkQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION = 'application';
    public const FIELD_PREVENTS_DOWNLOAD = 'preventsDownload';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_TYPE = 'type';
    public const FIELD_WEB_HTML = 'webHtml';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific SharingLink properties
     * 
     * @param array<string> $select Use SharingLinkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
