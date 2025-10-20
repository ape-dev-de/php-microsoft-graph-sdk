<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UpdateRecordingStatusOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UpdateRecordingStatusOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UpdateRecordingStatusOperationCollectionResponse properties
     * 
     * @param array<string> $select Use UpdateRecordingStatusOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
