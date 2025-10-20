<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperience;

/**
 * Request builder for individual EmployeeExperience item
 */
class EmployeeExperienceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get EmployeeExperience item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return EmployeeExperience
     */
    public function get(?array $queryParameters = null): EmployeeExperience
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, EmployeeExperience::class);
    }

    /**
     * Update EmployeeExperience item
     *
     * @param EmployeeExperience $item The item with updated properties
     * @return EmployeeExperience
     */
    public function patch(EmployeeExperience $item): EmployeeExperience
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, EmployeeExperience::class);
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
