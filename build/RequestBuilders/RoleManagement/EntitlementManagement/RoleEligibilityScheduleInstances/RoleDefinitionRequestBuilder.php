<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\EntitlementManagement\RoleEligibilityScheduleInstances;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleDefinition;

/**
 * Request builder for /roleManagement/entitlementManagement/roleEligibilityScheduleInstances/{unifiedRoleEligibilityScheduleInstance-id}/roleDefinition
 */
class RoleDefinitionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get roleDefinition from roleManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UnifiedRoleDefinition|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UnifiedRoleDefinition|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleDefinition|null
     */
    private function deserializeGet(string $body): UnifiedRoleDefinition|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnifiedRoleDefinition($data);
    }
}
