<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\Usage\Unbilled;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PartnersBillingOperation;

/**
 * Request builder for /reports/partners/billing/usage/unbilled/microsoft.graph.partners.billing.export
 */
class PartnersBillingExportRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action export
     * @param PartnersBillingOperation|\stdClass $body Request body
     * @return PartnersBillingOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PartnersBillingOperation|\stdClass $body): PartnersBillingOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PartnersBillingOperation|\stdClass|null
     */
    private function deserializePost(string $body): PartnersBillingOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PartnersBillingOperation($data);
    }
}
