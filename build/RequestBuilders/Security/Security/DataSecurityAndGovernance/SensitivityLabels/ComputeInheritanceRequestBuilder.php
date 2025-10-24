<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\DataSecurityAndGovernance\SensitivityLabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabel;

/**
 * Request builder for /security/dataSecurityAndGovernance/sensitivityLabels/computeInheritance(labelIds={labelIds},locale='{locale}',contentFormats={contentFormats})
 */
class ComputeInheritanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function computeInheritance
     * @return SensitivityLabel|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): SensitivityLabel|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SensitivityLabel|\stdClass
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SensitivityLabel($data);
    }
}
