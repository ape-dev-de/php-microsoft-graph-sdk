<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance\SensitivityLabels\Sublabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabel;

/**
 * Request builder for /users/{user-id}/dataSecurityAndGovernance/sensitivityLabels/{sensitivityLabel-id}/sublabels/computeInheritance(labelIds={labelIds},locale='{locale}',contentFormats={contentFormats})
 */
class ComputeInheritanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function computeInheritance
     * @return SensitivityLabel|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): SensitivityLabel|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SensitivityLabel|\stdClass|null
     */
    private function deserializeGet(string $body): SensitivityLabel|\stdClass|null    {
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
