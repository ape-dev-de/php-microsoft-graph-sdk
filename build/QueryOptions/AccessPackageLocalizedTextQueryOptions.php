<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageLocalizedText resources
 *
 * Available select fields:
 * - languageCode
 * - text
 */
class AccessPackageLocalizedTextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageLocalizedText
     */
    public const FIELD_LANGUAGE_CODE = 'languageCode';
    public const FIELD_TEXT = 'text';

    /**
     * Select specific AccessPackageLocalizedText properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
