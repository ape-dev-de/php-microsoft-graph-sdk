<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileSecurityState resources
 *
 * Available select fields:
 * - fileHash
 * - name
 * - path
 * - riskScore
 */
class FileSecurityStateQueryOptions extends QueryOptions
{
    public const FIELD_FILE_HASH = 'fileHash';
    public const FIELD_NAME = 'name';
    public const FIELD_PATH = 'path';
    public const FIELD_RISK_SCORE = 'riskScore';

    /**
     * Select specific FileSecurityState properties
     * 
     * @param array<string> $select Use FileSecurityStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
