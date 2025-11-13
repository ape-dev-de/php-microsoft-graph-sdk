<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AssignmentOrder;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/userAttributeAssignments/getOrder()
 */
class GetOrderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function getOrder
     * @return AssignmentOrder|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): AssignmentOrder|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AssignmentOrder|\stdClass|null
     */
    private function deserializeGet(string $body): AssignmentOrder|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AssignmentOrder($data);
    }
}
