<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityUserFlowAttribute;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/userAttributeAssignments/{identityUserFlowAttributeAssignment-id}/userAttribute
 */
class UserAttributeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get userAttribute from identity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityUserFlowAttribute|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityUserFlowAttribute|null
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
     * Deserialize response to IdentityUserFlowAttribute|null
     */
    private function deserializeGet(string $body): IdentityUserFlowAttribute|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityUserFlowAttribute($data);
    }
}
