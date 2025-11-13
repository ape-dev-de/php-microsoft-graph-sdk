<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\DataSecurityAndGovernance\SensitivityLabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ComputeRightsAndInheritanceResult;

/**
 * Request builder for /security/dataSecurityAndGovernance/sensitivityLabels/computeRightsAndInheritance
 */
class ComputeRightsAndInheritanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action computeRightsAndInheritance
     * @param ComputeRightsAndInheritanceResult|\stdClass $body Request body
     * @return ComputeRightsAndInheritanceResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ComputeRightsAndInheritanceResult|\stdClass $body): ComputeRightsAndInheritanceResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ComputeRightsAndInheritanceResult|\stdClass|null
     */
    private function deserializePost(string $body): ComputeRightsAndInheritanceResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ComputeRightsAndInheritanceResult($data);
    }
}
