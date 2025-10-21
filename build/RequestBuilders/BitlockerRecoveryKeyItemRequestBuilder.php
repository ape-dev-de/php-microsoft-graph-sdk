<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\BitlockerRecoveryKey;

/**
 * Request builder for individual BitlockerRecoveryKey item
 */
class BitlockerRecoveryKeyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get BitlockerRecoveryKey item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return BitlockerRecoveryKey
     */
    public function get(?array $queryParameters = null): BitlockerRecoveryKey
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, BitlockerRecoveryKey::class);
    }

    /**
     * Update BitlockerRecoveryKey item
     *
     * @param BitlockerRecoveryKey $item The item with updated properties
     * @return BitlockerRecoveryKey
     */
    public function patch(BitlockerRecoveryKey $item): BitlockerRecoveryKey
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, BitlockerRecoveryKey::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
