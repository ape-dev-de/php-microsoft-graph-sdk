<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DataPolicyOperation;

/**
 * Request builder for individual DataPolicyOperation item
 */
class DataPolicyOperationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DataPolicyOperation item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DataPolicyOperation
     */
    public function get(?array $queryParameters = null): DataPolicyOperation
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DataPolicyOperation::class);
    }

    /**
     * Update DataPolicyOperation item
     *
     * @param DataPolicyOperation $item The item with updated properties
     * @return DataPolicyOperation
     */
    public function patch(DataPolicyOperation $item): DataPolicyOperation
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DataPolicyOperation::class);
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
