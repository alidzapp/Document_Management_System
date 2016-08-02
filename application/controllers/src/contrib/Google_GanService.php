<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "advertisers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $advertisers = $ganService->advertisers;
 *  </code>
 */
class Google_AdvertisersServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves data about all advertisers that the requesting advertiser/publisher has access to.
     * (advertisers.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string relationshipStatus Filters out all advertisers for which do not have the given relationship status with the requesting publisher.
     * @opt_param double minSevenDayEpc Filters out all advertisers that have a seven day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param string advertiserCategory Caret(^) delimted list of advertiser categories. Valid categories are defined here: http://www.google.com/support/affiliatenetwork/advertiser/bin/answer.py?hl=en=107581. Filters out all advertisers not in one of the given advertiser categories. Optional.
     * @opt_param double minNinetyDayEpc Filters out all advertisers that have a ninety day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param int minPayoutRank A value between 1 and 4, where 1 represents the quartile of advertisers with the lowest ranks and 4 represents the quartile of advertisers with the highest ranks. Filters out all advertisers with a lower rank than the given quartile. For example if a 2 was given only advertisers with a payout rank of 25 or higher would be included. Optional.
     * @return Google_Advertisers
     */
    public function listAdvertisers($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Advertisers($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves data about a single advertiser if that the requesting advertiser/publisher has access
     * to it. Only publishers can lookup advertisers. Advertisers can request information about
     * themselves by omitting the advertiserId query parameter. (advertisers.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string advertiserId The ID of the advertiser to look up. Optional.
     * @return Google_Advertiser
     */
    public function get($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Advertiser($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "ccOffers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $ccOffers = $ganService->ccOffers;
 *  </code>
 */
class Google_CcOffersServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves credit card offers for the given publisher. (ccOffers.list)
     *
     * @param string $publisher The ID of the publisher in question.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string advertiser The advertiser ID of a card issuer whose offers to include. Optional, may be repeated.
     * @opt_param string projection The set of fields to return.
     * @return Google_CcOffers
     */
    public function listCcOffers($publisher, $optParams = array())
    {
        $params = array('publisher' => $publisher);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_CcOffers($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $events = $ganService->events;
 *  </code>
 */
class Google_EventsServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves event data for a given advertiser/publisher. (events.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderId Caret(^) delimited list of order IDs. Filters out all events that do not reference one of the given order IDs. Optional.
     * @opt_param string sku Caret(^) delimited list of SKUs. Filters out all events that do not reference one of the given SKU. Optional.
     * @opt_param string eventDateMax Filters out all events later than given date. Optional. Defaults to 24 hours after eventMin.
     * @opt_param string type Filters out all events that are not of the given type. Valid values: 'action', 'transaction', 'charge'. Optional.
     * @opt_param string linkId Caret(^) delimited list of link IDs. Filters out all events that do not reference one of the given link IDs. Optional.
     * @opt_param string modifyDateMin Filters out all events modified earlier than given date. Optional. Defaults to 24 hours before the current modifyDateMax, if modifyDateMax is explicitly set.
     * @opt_param string eventDateMin Filters out all events earlier than given date. Optional. Defaults to 24 hours from current date/time.
     * @opt_param string memberId Caret(^) delimited list of member IDs. Filters out all events that do not reference one of the given member IDs. Optional.
     * @opt_param string maxResults Max number of offers to return in this page. Optional. Defaults to 20.
     * @opt_param string advertiserId Caret(^) delimited list of advertiser IDs. Filters out all events that do not reference one of the given advertiser IDs. Only used when under publishers role. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string productCategory Caret(^) delimited list of product categories. Filters out all events that do not reference a product in one of the given product categories. Optional.
     * @opt_param string chargeType Filters out all charge events that are not of the given charge type. Valid values: 'other', 'slotting_fee', 'monthly_minimum', 'tier_bonus', 'credit', 'debit'. Optional.
     * @opt_param string modifyDateMax Filters out all events modified later than given date. Optional. Defaults to 24 hours after modifyDateMin, if modifyDateMin is explicitly set.
     * @opt_param string status Filters out all events that do not have the given status. Valid values: 'active', 'canceled'. Optional.
     * @opt_param string publisherId Caret(^) delimited list of publisher IDs. Filters out all events that do not reference one of the given publishers IDs. Only used when under advertiser role. Optional.
     * @return Google_Events
     */
    public function listEvents($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Events($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "links" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $links = $ganService->links;
 *  </code>
 */
class Google_LinksServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new link. (links.insert)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param Google_Link $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Link
     */
    public function insert($role, $roleId, Google_Link $postBody, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Google_Link($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves all links that match the query parameters. (links.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string linkType The type of the link.
     * @opt_param string startDateMin The beginning of the start date range.
     * @opt_param string assetSize The size of the given asset.
     * @opt_param string relationshipStatus The status of the relationship.
     * @opt_param string advertiserCategory The advertiser's primary vertical.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param string advertiserId Limits the resulting links to the ones belonging to the listed advertisers.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string startDateMax The end of the start date range.
     * @opt_param string promotionType The promotion type.
     * @opt_param string authorship The role of the author of the link.
     * @return Google_Links
     */
    public function listLinks($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Links($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves data about a single link if the requesting advertiser/publisher has access to it.
     * Advertisers can look up their own links. Publishers can look up visible links or links belonging
     * to advertisers they are in a relationship with. (links.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param string $linkId The ID of the link to look up.
     * @param array $optParams Optional parameters.
     * @return Google_Link
     */
    public function get($role, $roleId, $linkId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId, 'linkId' => $linkId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Link($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "publishers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $publishers = $ganService->publishers;
 *  </code>
 */
class Google_PublishersServiceResource extends Google_ServiceResource
{


    /**
     * Retrieves data about all publishers that the requesting advertiser/publisher has access to.
     * (publishers.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string publisherCategory Caret(^) delimted list of publisher categories. Valid categories: (unclassified|community_and_content|shopping_and_promotion|loyalty_and_rewards|network|search_specialist|comparison_shopping|email). Filters out all publishers not in one of the given advertiser categories. Optional.
     * @opt_param string relationshipStatus Filters out all publishers for which do not have the given relationship status with the requesting publisher.
     * @opt_param double minSevenDayEpc Filters out all publishers that have a seven day EPC average lower than the given value (inclusive). Min value 0.0. Optional.
     * @opt_param double minNinetyDayEpc Filters out all publishers that have a ninety day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param int minPayoutRank A value between 1 and 4, where 1 represents the quartile of publishers with the lowest ranks and 4 represents the quartile of publishers with the highest ranks. Filters out all publishers with a lower rank than the given quartile. For example if a 2 was given only publishers with a payout rank of 25 or higher would be included. Optional.
     * @return Google_Publishers
     */
    public function listPublishers($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Publishers($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves data about a single advertiser if that the requesting advertiser/publisher has access
     * to it. Only advertisers can look up publishers. Publishers can request information about
     * themselves by omitting the publisherId query parameter. (publishers.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string publisherId The ID of the publisher to look up. Optional.
     * @return Google_Publisher
     */
    public function get($role, $roleId, $optParams = array())
    {
        $params = array('role' => $role, 'roleId' => $roleId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Publisher($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Gan (v1beta1).
 *
 * <p>
 * Lets you have programmatic access to your Google Affiliate Network data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://code.google.com/apis/gan/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_GanService extends Google_Service
{
    public $advertisers;
    public $ccOffers;
    public $events;
    public $links;
    public $publishers;

    /**
     * Constructs the internal representation of the Gan service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'gan/v1beta1/';
        $this->version = 'v1beta1';
        $this->serviceName = 'gan';

        $client->addService($this->serviceName, $this->version);
        $this->advertisers = new Google_AdvertisersServiceResource($this, $this->serviceName, 'advertisers', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"relationshipStatus": {"enum": ["approved", "available", "deactivated", "declined", "pending"], "type": "string", "location": "query"}, "minSevenDayEpc": {"type": "number", "location": "query", "format": "double"}, "advertiserCategory": {"type": "string", "location": "query"}, "minNinetyDayEpc": {"type": "number", "location": "query", "format": "double"}, "pageToken": {"type": "string", "location": "query"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "100", "format": "uint32"}, "roleId": {"required": true, "type": "string", "location": "path"}, "minPayoutRank": {"location": "query", "minimum": "1", "type": "integer", "maximum": "4", "format": "int32"}}, "id": "gan.advertisers.list", "httpMethod": "GET", "path": "{role}/{roleId}/advertisers", "response": {"$ref": "Advertisers"}}, "get": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"advertiserId": {"type": "string", "location": "query"}, "roleId": {"required": true, "type": "string", "location": "path"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}}, "id": "gan.advertisers.get", "httpMethod": "GET", "path": "{role}/{roleId}/advertiser", "response": {"$ref": "Advertiser"}}}}', true));
        $this->ccOffers = new Google_CcOffersServiceResource($this, $this->serviceName, 'ccOffers', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"advertiser": {"repeated": true, "type": "string", "location": "query"}, "projection": {"enum": ["full", "summary"], "type": "string", "location": "query"}, "publisher": {"required": true, "type": "string", "location": "path"}}, "id": "gan.ccOffers.list", "httpMethod": "GET", "path": "publishers/{publisher}/ccOffers", "response": {"$ref": "CcOffers"}}}}', true));
        $this->events = new Google_EventsServiceResource($this, $this->serviceName, 'events', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"orderId": {"type": "string", "location": "query"}, "sku": {"type": "string", "location": "query"}, "eventDateMax": {"type": "string", "location": "query"}, "type": {"enum": ["action", "charge", "transaction"], "type": "string", "location": "query"}, "roleId": {"required": true, "type": "string", "location": "path"}, "linkId": {"type": "string", "location": "query"}, "status": {"enum": ["active", "canceled"], "type": "string", "location": "query"}, "eventDateMin": {"type": "string", "location": "query"}, "memberId": {"type": "string", "location": "query"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "100", "format": "uint32"}, "advertiserId": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "productCategory": {"type": "string", "location": "query"}, "chargeType": {"enum": ["credit", "debit", "monthly_minimum", "other", "slotting_fee", "tier_bonus"], "type": "string", "location": "query"}, "modifyDateMin": {"type": "string", "location": "query"}, "modifyDateMax": {"type": "string", "location": "query"}, "publisherId": {"type": "string", "location": "query"}}, "id": "gan.events.list", "httpMethod": "GET", "path": "{role}/{roleId}/events", "response": {"$ref": "Events"}}}}', true));
        $this->links = new Google_LinksServiceResource($this, $this->serviceName, 'links', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/gan"], "parameters": {"roleId": {"required": true, "type": "string", "location": "path"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}}, "request": {"$ref": "Link"}, "response": {"$ref": "Link"}, "httpMethod": "POST", "path": "{role}/{roleId}/link", "id": "gan.links.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"linkType": {"enum": ["banner", "text"], "type": "string", "location": "query"}, "startDateMin": {"type": "string", "location": "query"}, "assetSize": {"repeated": true, "type": "string", "location": "query"}, "roleId": {"required": true, "type": "string", "location": "path"}, "relationshipStatus": {"enum": ["approved", "available"], "type": "string", "location": "query"}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "100", "format": "uint32"}, "advertiserCategory": {"repeated": true, "enum": ["apparel_accessories", "appliances_electronics", "auto_dealer", "automotive", "babies_kids", "blogs_personal_sites", "books_magazines", "computers", "dating", "department_stores", "education", "employment", "financial_credit_cards", "financial_other", "flowers_gifts", "grocery", "health_beauty", "home_garden", "hosting_domain", "internet_providers", "legal", "media_entertainment", "medical", "movies_games", "music", "nonprofit", "office_supplies", "online_games", "outdoor", "pets", "real_estate", "restaurants", "sport_fitness", "telecom", "ticketing", "toys_hobbies", "travel", "utilities", "wholesale_relationship", "wine_spirits"], "type": "string", "location": "query"}, "advertiserId": {"repeated": true, "type": "string", "location": "query", "format": "int64"}, "pageToken": {"type": "string", "location": "query"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "startDateMax": {"type": "string", "location": "query"}, "promotionType": {"repeated": true, "enum": ["buy_get", "coupon", "free_gift", "free_gift_wrap", "free_shipping", "none", "ongoing", "percent_off", "price_cut", "product_promotion", "sale", "sweepstakes"], "type": "string", "location": "query"}, "authorship": {"enum": ["advertiser", "publisher"], "type": "string", "location": "query"}}, "id": "gan.links.list", "httpMethod": "GET", "path": "{role}/{roleId}/links", "response": {"$ref": "Links"}}, "get": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"linkId": {"required": true, "type": "string", "location": "path", "format": "int64"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "roleId": {"required": true, "type": "string", "location": "path"}}, "id": "gan.links.get", "httpMethod": "GET", "path": "{role}/{roleId}/link/{linkId}", "response": {"$ref": "Link"}}}}', true));
        $this->publishers = new Google_PublishersServiceResource($this, $this->serviceName, 'publishers', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"publisherCategory": {"type": "string", "location": "query"}, "relationshipStatus": {"enum": ["approved", "available", "deactivated", "declined", "pending"], "type": "string", "location": "query"}, "minSevenDayEpc": {"type": "number", "location": "query", "format": "double"}, "minNinetyDayEpc": {"type": "number", "location": "query", "format": "double"}, "pageToken": {"type": "string", "location": "query"}, "role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "maxResults": {"location": "query", "minimum": "0", "type": "integer", "maximum": "100", "format": "uint32"}, "roleId": {"required": true, "type": "string", "location": "path"}, "minPayoutRank": {"location": "query", "minimum": "1", "type": "integer", "maximum": "4", "format": "int32"}}, "id": "gan.publishers.list", "httpMethod": "GET", "path": "{role}/{roleId}/publishers", "response": {"$ref": "Publishers"}}, "get": {"scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"], "parameters": {"role": {"required": true, "type": "string", "location": "path", "enum": ["advertisers", "publishers"]}, "publisherId": {"type": "string", "location": "query"}, "roleId": {"required": true, "type": "string", "location": "path"}}, "id": "gan.publishers.get", "httpMethod": "GET", "path": "{role}/{roleId}/publisher", "response": {"$ref": "Publisher"}}}}', true));

    }
}

class Google_Advertiser extends Google_Model
{
    public $category;
    public $contactEmail;
    public $kind;
    public $siteUrl;
    public $contactPhone;
    public $description;
    public $payoutRank;
    public $defaultLinkId;
    public $epcSevenDayAverage;
    public $commissionDuration;
    public $status;
    public $epcNinetyDayAverage;
    public $allowPublisherCreatedLinks;
    public $item;
    public $joinDate;
    public $logoUrl;
    public $id;
    public $productFeedsEnabled;
    public $name;
    protected $__epcSevenDayAverageType = 'Google_Money';
    protected $__epcSevenDayAverageDataType = '';
    protected $__epcNinetyDayAverageType = 'Google_Money';
    protected $__epcNinetyDayAverageDataType = '';
    protected $__itemType = 'Google_Advertiser';
    protected $__itemDataType = '';

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPayoutRank()
    {
        return $this->payoutRank;
    }

    public function setPayoutRank($payoutRank)
    {
        $this->payoutRank = $payoutRank;
    }

    public function getDefaultLinkId()
    {
        return $this->defaultLinkId;
    }

    public function setDefaultLinkId($defaultLinkId)
    {
        $this->defaultLinkId = $defaultLinkId;
    }

    public function getEpcSevenDayAverage()
    {
        return $this->epcSevenDayAverage;
    }

    public function setEpcSevenDayAverage(Google_Money $epcSevenDayAverage)
    {
        $this->epcSevenDayAverage = $epcSevenDayAverage;
    }

    public function getCommissionDuration()
    {
        return $this->commissionDuration;
    }

    public function setCommissionDuration($commissionDuration)
    {
        $this->commissionDuration = $commissionDuration;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getEpcNinetyDayAverage()
    {
        return $this->epcNinetyDayAverage;
    }

    public function setEpcNinetyDayAverage(Google_Money $epcNinetyDayAverage)
    {
        $this->epcNinetyDayAverage = $epcNinetyDayAverage;
    }

    public function getAllowPublisherCreatedLinks()
    {
        return $this->allowPublisherCreatedLinks;
    }

    public function setAllowPublisherCreatedLinks($allowPublisherCreatedLinks)
    {
        $this->allowPublisherCreatedLinks = $allowPublisherCreatedLinks;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(Google_Advertiser $item)
    {
        $this->item = $item;
    }

    public function getJoinDate()
    {
        return $this->joinDate;
    }

    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;
    }

    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProductFeedsEnabled()
    {
        return $this->productFeedsEnabled;
    }

    public function setProductFeedsEnabled($productFeedsEnabled)
    {
        $this->productFeedsEnabled = $productFeedsEnabled;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Google_Advertisers extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Advertiser';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Advertiser', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_CcOffer extends Google_Model
{
    public $luggageInsurance;
    public $creditLimitMin;
    public $cardName;
    public $creditLimitMax;
    public $gracePeriodDisplay;
    public $offerId;
    public $rewardUnit;
    public $minPurchaseRate;
    public $cardBenefits;
    public $rewards;
    public $offersImmediateCashReward;
    public $travelInsurance;
    public $returnedPaymentFee;
    public $kind;
    public $issuer;
    public $maxPurchaseRate;
    public $minimumFinanceCharge;
    public $existingCustomerOnly;
    public $annualFeeDisplay;
    public $initialSetupAndProcessingFee;
    public $issuerId;
    public $purchaseRateAdditionalDetails;
    public $prohibitedCategories;
    public $fraudLiability;
    public $cashAdvanceTerms;
    public $landingPageUrl;
    public $introCashAdvanceTerms;
    public $rewardsExpire;
    public $introPurchaseTerms;
    public $defaultFees;
    public $extendedWarranty;
    public $emergencyInsurance;
    public $firstYearAnnualFee;
    public $trackingUrl;
    public $latePaymentFee;
    public $overLimitFee;
    public $cardType;
    public $approvedCategories;
    public $rewardPartner;
    public $introBalanceTransferTerms;
    public $foreignCurrencyTransactionFee;
    public $annualFee;
    public $issuerWebsite;
    public $variableRatesUpdateFrequency;
    public $carRentalInsurance;
    public $additionalCardBenefits;
    public $ageMinimum;
    public $balanceComputationMethod;
    public $aprDisplay;
    public $additionalCardHolderFee;
    public $variableRatesLastUpdated;
    public $network;
    public $purchaseRateType;
    public $statementCopyFee;
    public $rewardsHaveBlackoutDates;
    public $creditRatingDisplay;
    public $flightAccidentInsurance;
    public $annualRewardMaximum;
    public $balanceTransferTerms;
    public $bonusRewards;
    public $imageUrl;
    public $ageMinimumDetails;
    public $disclaimer;
    protected $__rewardsType = 'Google_CcOfferRewards';
    protected $__rewardsDataType = 'array';
    protected $__defaultFeesType = 'Google_CcOfferDefaultFees';
    protected $__defaultFeesDataType = 'array';
    protected $__bonusRewardsType = 'Google_CcOfferBonusRewards';
    protected $__bonusRewardsDataType = 'array';

    public function getLuggageInsurance()
    {
        return $this->luggageInsurance;
    }

    public function setLuggageInsurance($luggageInsurance)
    {
        $this->luggageInsurance = $luggageInsurance;
    }

    public function getCreditLimitMin()
    {
        return $this->creditLimitMin;
    }

    public function setCreditLimitMin($creditLimitMin)
    {
        $this->creditLimitMin = $creditLimitMin;
    }

    public function getCardName()
    {
        return $this->cardName;
    }

    public function setCardName($cardName)
    {
        $this->cardName = $cardName;
    }

    public function getCreditLimitMax()
    {
        return $this->creditLimitMax;
    }

    public function setCreditLimitMax($creditLimitMax)
    {
        $this->creditLimitMax = $creditLimitMax;
    }

    public function getGracePeriodDisplay()
    {
        return $this->gracePeriodDisplay;
    }

    public function setGracePeriodDisplay($gracePeriodDisplay)
    {
        $this->gracePeriodDisplay = $gracePeriodDisplay;
    }

    public function getOfferId()
    {
        return $this->offerId;
    }

    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;
    }

    public function getRewardUnit()
    {
        return $this->rewardUnit;
    }

    public function setRewardUnit($rewardUnit)
    {
        $this->rewardUnit = $rewardUnit;
    }

    public function getMinPurchaseRate()
    {
        return $this->minPurchaseRate;
    }

    public function setMinPurchaseRate($minPurchaseRate)
    {
        $this->minPurchaseRate = $minPurchaseRate;
    }

    public function getCardBenefits()
    {
        return $this->cardBenefits;
    }

    public function setCardBenefits($cardBenefits)
    {
        $this->cardBenefits = $cardBenefits;
    }

    public function getRewards()
    {
        return $this->rewards;
    }

    public function setRewards($rewards)
    {
        $this->assertIsArray($rewards, 'Google_CcOfferRewards', __METHOD__);
        $this->rewards = $rewards;
    }

    public function getOffersImmediateCashReward()
    {
        return $this->offersImmediateCashReward;
    }

    public function setOffersImmediateCashReward($offersImmediateCashReward)
    {
        $this->offersImmediateCashReward = $offersImmediateCashReward;
    }

    public function getTravelInsurance()
    {
        return $this->travelInsurance;
    }

    public function setTravelInsurance($travelInsurance)
    {
        $this->travelInsurance = $travelInsurance;
    }

    public function getReturnedPaymentFee()
    {
        return $this->returnedPaymentFee;
    }

    public function setReturnedPaymentFee($returnedPaymentFee)
    {
        $this->returnedPaymentFee = $returnedPaymentFee;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getIssuer()
    {
        return $this->issuer;
    }

    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
    }

    public function getMaxPurchaseRate()
    {
        return $this->maxPurchaseRate;
    }

    public function setMaxPurchaseRate($maxPurchaseRate)
    {
        $this->maxPurchaseRate = $maxPurchaseRate;
    }

    public function getMinimumFinanceCharge()
    {
        return $this->minimumFinanceCharge;
    }

    public function setMinimumFinanceCharge($minimumFinanceCharge)
    {
        $this->minimumFinanceCharge = $minimumFinanceCharge;
    }

    public function getExistingCustomerOnly()
    {
        return $this->existingCustomerOnly;
    }

    public function setExistingCustomerOnly($existingCustomerOnly)
    {
        $this->existingCustomerOnly = $existingCustomerOnly;
    }

    public function getAnnualFeeDisplay()
    {
        return $this->annualFeeDisplay;
    }

    public function setAnnualFeeDisplay($annualFeeDisplay)
    {
        $this->annualFeeDisplay = $annualFeeDisplay;
    }

    public function getInitialSetupAndProcessingFee()
    {
        return $this->initialSetupAndProcessingFee;
    }

    public function setInitialSetupAndProcessingFee($initialSetupAndProcessingFee)
    {
        $this->initialSetupAndProcessingFee = $initialSetupAndProcessingFee;
    }

    public function getIssuerId()
    {
        return $this->issuerId;
    }

    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }

    public function getPurchaseRateAdditionalDetails()
    {
        return $this->purchaseRateAdditionalDetails;
    }

    public function setPurchaseRateAdditionalDetails($purchaseRateAdditionalDetails)
    {
        $this->purchaseRateAdditionalDetails = $purchaseRateAdditionalDetails;
    }

    public function getProhibitedCategories()
    {
        return $this->prohibitedCategories;
    }

    public function setProhibitedCategories($prohibitedCategories)
    {
        $this->prohibitedCategories = $prohibitedCategories;
    }

    public function getFraudLiability()
    {
        return $this->fraudLiability;
    }

    public function setFraudLiability($fraudLiability)
    {
        $this->fraudLiability = $fraudLiability;
    }

    public function getCashAdvanceTerms()
    {
        return $this->cashAdvanceTerms;
    }

    public function setCashAdvanceTerms($cashAdvanceTerms)
    {
        $this->cashAdvanceTerms = $cashAdvanceTerms;
    }

    public function getLandingPageUrl()
    {
        return $this->landingPageUrl;
    }

    public function setLandingPageUrl($landingPageUrl)
    {
        $this->landingPageUrl = $landingPageUrl;
    }

    public function getIntroCashAdvanceTerms()
    {
        return $this->introCashAdvanceTerms;
    }

    public function setIntroCashAdvanceTerms($introCashAdvanceTerms)
    {
        $this->introCashAdvanceTerms = $introCashAdvanceTerms;
    }

    public function getRewardsExpire()
    {
        return $this->rewardsExpire;
    }

    public function setRewardsExpire($rewardsExpire)
    {
        $this->rewardsExpire = $rewardsExpire;
    }

    public function getIntroPurchaseTerms()
    {
        return $this->introPurchaseTerms;
    }

    public function setIntroPurchaseTerms($introPurchaseTerms)
    {
        $this->introPurchaseTerms = $introPurchaseTerms;
    }

    public function getDefaultFees()
    {
        return $this->defaultFees;
    }

    public function setDefaultFees($defaultFees)
    {
        $this->assertIsArray($defaultFees, 'Google_CcOfferDefaultFees', __METHOD__);
        $this->defaultFees = $defaultFees;
    }

    public function getExtendedWarranty()
    {
        return $this->extendedWarranty;
    }

    public function setExtendedWarranty($extendedWarranty)
    {
        $this->extendedWarranty = $extendedWarranty;
    }

    public function getEmergencyInsurance()
    {
        return $this->emergencyInsurance;
    }

    public function setEmergencyInsurance($emergencyInsurance)
    {
        $this->emergencyInsurance = $emergencyInsurance;
    }

    public function getFirstYearAnnualFee()
    {
        return $this->firstYearAnnualFee;
    }

    public function setFirstYearAnnualFee($firstYearAnnualFee)
    {
        $this->firstYearAnnualFee = $firstYearAnnualFee;
    }

    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

    public function getLatePaymentFee()
    {
        return $this->latePaymentFee;
    }

    public function setLatePaymentFee($latePaymentFee)
    {
        $this->latePaymentFee = $latePaymentFee;
    }

    public function getOverLimitFee()
    {
        return $this->overLimitFee;
    }

    public function setOverLimitFee($overLimitFee)
    {
        $this->overLimitFee = $overLimitFee;
    }

    public function getCardType()
    {
        return $this->cardType;
    }

    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    public function getApprovedCategories()
    {
        return $this->approvedCategories;
    }

    public function setApprovedCategories($approvedCategories)
    {
        $this->approvedCategories = $approvedCategories;
    }

    public function getRewardPartner()
    {
        return $this->rewardPartner;
    }

    public function setRewardPartner($rewardPartner)
    {
        $this->rewardPartner = $rewardPartner;
    }

    public function getIntroBalanceTransferTerms()
    {
        return $this->introBalanceTransferTerms;
    }

    public function setIntroBalanceTransferTerms($introBalanceTransferTerms)
    {
        $this->introBalanceTransferTerms = $introBalanceTransferTerms;
    }

    public function getForeignCurrencyTransactionFee()
    {
        return $this->foreignCurrencyTransactionFee;
    }

    public function setForeignCurrencyTransactionFee($foreignCurrencyTransactionFee)
    {
        $this->foreignCurrencyTransactionFee = $foreignCurrencyTransactionFee;
    }

    public function getAnnualFee()
    {
        return $this->annualFee;
    }

    public function setAnnualFee($annualFee)
    {
        $this->annualFee = $annualFee;
    }

    public function getIssuerWebsite()
    {
        return $this->issuerWebsite;
    }

    public function setIssuerWebsite($issuerWebsite)
    {
        $this->issuerWebsite = $issuerWebsite;
    }

    public function getVariableRatesUpdateFrequency()
    {
        return $this->variableRatesUpdateFrequency;
    }

    public function setVariableRatesUpdateFrequency($variableRatesUpdateFrequency)
    {
        $this->variableRatesUpdateFrequency = $variableRatesUpdateFrequency;
    }

    public function getCarRentalInsurance()
    {
        return $this->carRentalInsurance;
    }

    public function setCarRentalInsurance($carRentalInsurance)
    {
        $this->carRentalInsurance = $carRentalInsurance;
    }

    public function getAdditionalCardBenefits()
    {
        return $this->additionalCardBenefits;
    }

    public function setAdditionalCardBenefits($additionalCardBenefits)
    {
        $this->additionalCardBenefits = $additionalCardBenefits;
    }

    public function getAgeMinimum()
    {
        return $this->ageMinimum;
    }

    public function setAgeMinimum($ageMinimum)
    {
        $this->ageMinimum = $ageMinimum;
    }

    public function getBalanceComputationMethod()
    {
        return $this->balanceComputationMethod;
    }

    public function setBalanceComputationMethod($balanceComputationMethod)
    {
        $this->balanceComputationMethod = $balanceComputationMethod;
    }

    public function getAprDisplay()
    {
        return $this->aprDisplay;
    }

    public function setAprDisplay($aprDisplay)
    {
        $this->aprDisplay = $aprDisplay;
    }

    public function getAdditionalCardHolderFee()
    {
        return $this->additionalCardHolderFee;
    }

    public function setAdditionalCardHolderFee($additionalCardHolderFee)
    {
        $this->additionalCardHolderFee = $additionalCardHolderFee;
    }

    public function getVariableRatesLastUpdated()
    {
        return $this->variableRatesLastUpdated;
    }

    public function setVariableRatesLastUpdated($variableRatesLastUpdated)
    {
        $this->variableRatesLastUpdated = $variableRatesLastUpdated;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getPurchaseRateType()
    {
        return $this->purchaseRateType;
    }

    public function setPurchaseRateType($purchaseRateType)
    {
        $this->purchaseRateType = $purchaseRateType;
    }

    public function getStatementCopyFee()
    {
        return $this->statementCopyFee;
    }

    public function setStatementCopyFee($statementCopyFee)
    {
        $this->statementCopyFee = $statementCopyFee;
    }

    public function getRewardsHaveBlackoutDates()
    {
        return $this->rewardsHaveBlackoutDates;
    }

    public function setRewardsHaveBlackoutDates($rewardsHaveBlackoutDates)
    {
        $this->rewardsHaveBlackoutDates = $rewardsHaveBlackoutDates;
    }

    public function getCreditRatingDisplay()
    {
        return $this->creditRatingDisplay;
    }

    public function setCreditRatingDisplay($creditRatingDisplay)
    {
        $this->creditRatingDisplay = $creditRatingDisplay;
    }

    public function getFlightAccidentInsurance()
    {
        return $this->flightAccidentInsurance;
    }

    public function setFlightAccidentInsurance($flightAccidentInsurance)
    {
        $this->flightAccidentInsurance = $flightAccidentInsurance;
    }

    public function getAnnualRewardMaximum()
    {
        return $this->annualRewardMaximum;
    }

    public function setAnnualRewardMaximum($annualRewardMaximum)
    {
        $this->annualRewardMaximum = $annualRewardMaximum;
    }

    public function getBalanceTransferTerms()
    {
        return $this->balanceTransferTerms;
    }

    public function setBalanceTransferTerms($balanceTransferTerms)
    {
        $this->balanceTransferTerms = $balanceTransferTerms;
    }

    public function getBonusRewards()
    {
        return $this->bonusRewards;
    }

    public function setBonusRewards($bonusRewards)
    {
        $this->assertIsArray($bonusRewards, 'Google_CcOfferBonusRewards', __METHOD__);
        $this->bonusRewards = $bonusRewards;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    public function getAgeMinimumDetails()
    {
        return $this->ageMinimumDetails;
    }

    public function setAgeMinimumDetails($ageMinimumDetails)
    {
        $this->ageMinimumDetails = $ageMinimumDetails;
    }

    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;
    }
}

class Google_CcOfferBonusRewards extends Google_Model
{
    public $amount;
    public $details;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }
}

class Google_CcOfferDefaultFees extends Google_Model
{
    public $category;
    public $maxRate;
    public $minRate;
    public $rateType;

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getMaxRate()
    {
        return $this->maxRate;
    }

    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;
    }

    public function getMinRate()
    {
        return $this->minRate;
    }

    public function setMinRate($minRate)
    {
        $this->minRate = $minRate;
    }

    public function getRateType()
    {
        return $this->rateType;
    }

    public function setRateType($rateType)
    {
        $this->rateType = $rateType;
    }
}

class Google_CcOfferRewards extends Google_Model
{
    public $category;
    public $minRewardTier;
    public $maxRewardTier;
    public $expirationMonths;
    public $amount;
    public $additionalDetails;

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getMinRewardTier()
    {
        return $this->minRewardTier;
    }

    public function setMinRewardTier($minRewardTier)
    {
        $this->minRewardTier = $minRewardTier;
    }

    public function getMaxRewardTier()
    {
        return $this->maxRewardTier;
    }

    public function setMaxRewardTier($maxRewardTier)
    {
        $this->maxRewardTier = $maxRewardTier;
    }

    public function getExpirationMonths()
    {
        return $this->expirationMonths;
    }

    public function setExpirationMonths($expirationMonths)
    {
        $this->expirationMonths = $expirationMonths;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    public function setAdditionalDetails($additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;
    }
}

class Google_CcOffers extends Google_Model
{
    public $items;
    public $kind;
    protected $__itemsType = 'Google_CcOffer';
    protected $__itemsDataType = 'array';

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_CcOffer', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Event extends Google_Model
{
    public $networkFee;
    public $advertiserName;
    public $kind;
    public $modifyDate;
    public $type;
    public $orderId;
    public $publisherName;
    public $memberId;
    public $advertiserId;
    public $status;
    public $chargeId;
    public $products;
    public $earnings;
    public $chargeType;
    public $publisherFee;
    public $commissionableSales;
    public $publisherId;
    public $eventDate;
    protected $__networkFeeType = 'Google_Money';
    protected $__networkFeeDataType = '';
    protected $__productsType = 'Google_EventProducts';
    protected $__productsDataType = 'array';
    protected $__earningsType = 'Google_Money';
    protected $__earningsDataType = '';
    protected $__publisherFeeType = 'Google_Money';
    protected $__publisherFeeDataType = '';
    protected $__commissionableSalesType = 'Google_Money';
    protected $__commissionableSalesDataType = '';

    public function getNetworkFee()
    {
        return $this->networkFee;
    }

    public function setNetworkFee(Google_Money $networkFee)
    {
        $this->networkFee = $networkFee;
    }

    public function getAdvertiserName()
    {
        return $this->advertiserName;
    }

    public function setAdvertiserName($advertiserName)
    {
        $this->advertiserName = $advertiserName;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getPublisherName()
    {
        return $this->publisherName;
    }

    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
    }

    public function getMemberId()
    {
        return $this->memberId;
    }

    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    public function setAdvertiserId($advertiserId)
    {
        $this->advertiserId = $advertiserId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getChargeId()
    {
        return $this->chargeId;
    }

    public function setChargeId($chargeId)
    {
        $this->chargeId = $chargeId;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->assertIsArray($products, 'Google_EventProducts', __METHOD__);
        $this->products = $products;
    }

    public function getEarnings()
    {
        return $this->earnings;
    }

    public function setEarnings(Google_Money $earnings)
    {
        $this->earnings = $earnings;
    }

    public function getChargeType()
    {
        return $this->chargeType;
    }

    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
    }

    public function getPublisherFee()
    {
        return $this->publisherFee;
    }

    public function setPublisherFee(Google_Money $publisherFee)
    {
        $this->publisherFee = $publisherFee;
    }

    public function getCommissionableSales()
    {
        return $this->commissionableSales;
    }

    public function setCommissionableSales(Google_Money $commissionableSales)
    {
        $this->commissionableSales = $commissionableSales;
    }

    public function getPublisherId()
    {
        return $this->publisherId;
    }

    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
    }

    public function getEventDate()
    {
        return $this->eventDate;
    }

    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }
}

class Google_EventProducts extends Google_Model
{
    public $networkFee;
    public $sku;
    public $categoryName;
    public $skuName;
    public $publisherFee;
    public $earnings;
    public $unitPrice;
    public $categoryId;
    public $quantity;
    protected $__networkFeeType = 'Google_Money';
    protected $__networkFeeDataType = '';
    protected $__publisherFeeType = 'Google_Money';
    protected $__publisherFeeDataType = '';
    protected $__earningsType = 'Google_Money';
    protected $__earningsDataType = '';
    protected $__unitPriceType = 'Google_Money';
    protected $__unitPriceDataType = '';

    public function getNetworkFee()
    {
        return $this->networkFee;
    }

    public function setNetworkFee(Google_Money $networkFee)
    {
        $this->networkFee = $networkFee;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    public function setSkuName($skuName)
    {
        $this->skuName = $skuName;
    }

    public function getPublisherFee()
    {
        return $this->publisherFee;
    }

    public function setPublisherFee(Google_Money $publisherFee)
    {
        $this->publisherFee = $publisherFee;
    }

    public function getEarnings()
    {
        return $this->earnings;
    }

    public function setEarnings(Google_Money $earnings)
    {
        $this->earnings = $earnings;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(Google_Money $unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}

class Google_Events extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Event';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Event', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Link extends Google_Model
{
    public $isActive;
    public $linkType;
    public $kind;
    public $endDate;
    public $description;
    public $name;
    public $startDate;
    public $createDate;
    public $imageAltText;
    public $id;
    public $advertiserId;
    public $impressionTrackingUrl;
    public $promotionType;
    public $duration;
    public $authorship;
    public $availability;
    public $clickTrackingUrl;
    public $destinationUrl;

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getLinkType()
    {
        return $this->linkType;
    }

    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getCreateDate()
    {
        return $this->createDate;
    }

    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    public function getImageAltText()
    {
        return $this->imageAltText;
    }

    public function setImageAltText($imageAltText)
    {
        $this->imageAltText = $imageAltText;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    public function setAdvertiserId($advertiserId)
    {
        $this->advertiserId = $advertiserId;
    }

    public function getImpressionTrackingUrl()
    {
        return $this->impressionTrackingUrl;
    }

    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->impressionTrackingUrl = $impressionTrackingUrl;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getAuthorship()
    {
        return $this->authorship;
    }

    public function setAuthorship($authorship)
    {
        $this->authorship = $authorship;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    public function getClickTrackingUrl()
    {
        return $this->clickTrackingUrl;
    }

    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->clickTrackingUrl = $clickTrackingUrl;
    }

    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }
}

class Google_Links extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Link';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Link', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Money extends Google_Model
{
    public $amount;
    public $currencyCode;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
}

class Google_Publisher extends Google_Model
{
    public $status;
    public $kind;
    public $name;
    public $classification;
    public $epcSevenDayAverage;
    public $payoutRank;
    public $epcNinetyDayAverage;
    public $item;
    public $joinDate;
    public $sites;
    public $id;
    protected $__epcSevenDayAverageType = 'Google_Money';
    protected $__epcSevenDayAverageDataType = '';
    protected $__epcNinetyDayAverageType = 'Google_Money';
    protected $__epcNinetyDayAverageDataType = '';
    protected $__itemType = 'Google_Publisher';
    protected $__itemDataType = '';

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getClassification()
    {
        return $this->classification;
    }

    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    public function getEpcSevenDayAverage()
    {
        return $this->epcSevenDayAverage;
    }

    public function setEpcSevenDayAverage(Google_Money $epcSevenDayAverage)
    {
        $this->epcSevenDayAverage = $epcSevenDayAverage;
    }

    public function getPayoutRank()
    {
        return $this->payoutRank;
    }

    public function setPayoutRank($payoutRank)
    {
        $this->payoutRank = $payoutRank;
    }

    public function getEpcNinetyDayAverage()
    {
        return $this->epcNinetyDayAverage;
    }

    public function setEpcNinetyDayAverage(Google_Money $epcNinetyDayAverage)
    {
        $this->epcNinetyDayAverage = $epcNinetyDayAverage;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(Google_Publisher $item)
    {
        $this->item = $item;
    }

    public function getJoinDate()
    {
        return $this->joinDate;
    }

    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;
    }

    public function getSites()
    {
        return $this->sites;
    }

    public function setSites($sites)
    {
        $this->sites = $sites;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_Publishers extends Google_Model
{
    public $nextPageToken;
    public $items;
    public $kind;
    protected $__itemsType = 'Google_Publisher';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Publisher', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}
