<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCustomExtensionStage resources
 *
 * Available select fields:
 */
class AccessPackageCustomExtensionStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageCustomExtensionStage
     */

    /**
     * Select specific AccessPackageCustomExtensionStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
