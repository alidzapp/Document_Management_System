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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $shoppingService = new Google_ShoppingService(...);
 *   $products = $shoppingService->products;
 *  </code>
 */
class Google_ProductsServiceResource extends Google_ServiceResource
{


    /**
     * Returns a list of products and content modules (products.list)
     *
     * @param string $source Query source
     * @param array $optParams Optional parameters.
     *
     * @opt_param string facets.include Facets to include (applies when useGcsConfig == false)
     * @opt_param bool plusOne.enabled Whether to return +1 button code
     * @opt_param bool plusOne.useGcsConfig Whether to use +1 button styles configured in the GCS account
     * @opt_param bool facets.enabled Whether to return facet information
     * @opt_param bool relatedQueries.useGcsConfig This parameter is currently ignored
     * @opt_param bool promotions.enabled Whether to return promotion information
     * @opt_param string channels Channels specification
     * @opt_param string currency Currency restriction (ISO 4217)
     * @opt_param bool categoryRecommendations.enabled Whether to return category recommendation information
     * @opt_param string facets.discover Facets to discover
     * @opt_param string categoryRecommendations.category Category for which to retrieve recommendations
     * @opt_param string startIndex Index (1-based) of first product to return
     * @opt_param string availability Comma separated list of availabilities (outOfStock, limited, inStock, backOrder, preOrder, onDisplayToOrder) to return
     * @opt_param string crowdBy Crowding specification
     * @opt_param bool spelling.enabled Whether to return spelling suggestions
     * @opt_param string taxonomy Taxonomy name
     * @opt_param bool spelling.useGcsConfig This parameter is currently ignored
     * @opt_param string useCase One of CommerceSearchUseCase, ShoppingApiUseCase
     * @opt_param string location Location used to determine tax and shipping
     * @opt_param int maxVariants Maximum number of variant results to return per result
     * @opt_param string categories.include Category specification
     * @opt_param string boostBy Boosting specification
     * @opt_param bool safe Whether safe search is enabled. Default: true
     * @opt_param bool categories.useGcsConfig This parameter is currently ignored
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param bool facets.useGcsConfig Whether to return facet information as configured in the GCS account
     * @opt_param bool categories.enabled Whether to return category information
     * @opt_param string plusOne.styles +1 button rendering styles
     * @opt_param string attributeFilter Comma separated list of attributes to return
     * @opt_param bool clickTracking Whether to add a click tracking parameter to offer URLs
     * @opt_param string thumbnails Image thumbnails specification
     * @opt_param string language Language restriction (BCP 47)
     * @opt_param string categoryRecommendations.include Category recommendation specification
     * @opt_param string country Country restriction (ISO 3166)
     * @opt_param string rankBy Ranking specification
     * @opt_param string restrictBy Restriction specification
     * @opt_param string q Search query
     * @opt_param bool redirects.enabled Whether to return redirect information
     * @opt_param bool redirects.useGcsConfig Whether to return redirect information as configured in the GCS account
     * @opt_param bool relatedQueries.enabled Whether to return related queries
     * @opt_param bool categoryRecommendations.useGcsConfig This parameter is currently ignored
     * @opt_param bool promotions.useGcsConfig Whether to return promotion information as configured in the GCS account
     * @return Google_Products
     */
    public function listProducts($source, $optParams = array())
    {
        $params = array('source' => $source);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_Products($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a single product (products.get)
     *
     * @param string $source Query source
     * @param string $accountId Merchant center account id
     * @param string $productIdType Type of productId
     * @param string $productId Id of product
     * @param array $optParams Optional parameters.
     *
     * @opt_param string categories.include Category specification
     * @opt_param bool recommendations.enabled Whether to return recommendation information
     * @opt_param string thumbnails Thumbnail specification
     * @opt_param bool plusOne.useGcsConfig Whether to use +1 button styles configured in the GCS account
     * @opt_param string taxonomy Merchant taxonomy
     * @opt_param bool categories.useGcsConfig This parameter is currently ignored
     * @opt_param string plusOne.styles +1 button rendering styles
     * @opt_param string recommendations.include Recommendation specification
     * @opt_param bool categories.enabled Whether to return category information
     * @opt_param string location Location used to determine tax and shipping
     * @opt_param bool plusOne.enabled Whether to return +1 button code
     * @opt_param string attributeFilter Comma separated list of attributes to return
     * @opt_param bool recommendations.useGcsConfig This parameter is currently ignored
     * @return Google_Product
     */
    public function get($source, $accountId, $productIdType, $productId, $optParams = array())
    {
        $params = array('source' => $source, 'accountId' => $accountId, 'productIdType' => $productIdType, 'productId' => $productId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Product($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Shopping (v1).
 *
 * <p>
 * Lets you search over product data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/shopping/search/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ShoppingService extends Google_Service
{
    public $products;

    /**
     * Constructs the internal representation of the Shopping service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'shopping/search/v1/';
        $this->version = 'v1';
        $this->serviceName = 'shopping';

        $client->addService($this->serviceName, $this->version);
        $this->products = new Google_ProductsServiceResource($this, $this->serviceName, 'products', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/shoppingapi"], "parameters": {"facets.include": {"type": "string", "location": "query"}, "plusOne.enabled": {"type": "boolean", "location": "query"}, "plusOne.useGcsConfig": {"type": "boolean", "location": "query"}, "facets.enabled": {"type": "boolean", "location": "query"}, "relatedQueries.useGcsConfig": {"type": "boolean", "location": "query"}, "promotions.enabled": {"type": "boolean", "location": "query"}, "channels": {"type": "string", "location": "query"}, "currency": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "location": "query", "format": "uint32"}, "facets.discover": {"type": "string", "location": "query"}, "categoryRecommendations.category": {"type": "string", "location": "query"}, "availability": {"type": "string", "location": "query"}, "crowdBy": {"type": "string", "location": "query"}, "spelling.enabled": {"type": "boolean", "location": "query"}, "taxonomy": {"type": "string", "location": "query"}, "spelling.useGcsConfig": {"type": "boolean", "location": "query"}, "source": {"required": true, "type": "string", "location": "path"}, "useCase": {"type": "string", "location": "query"}, "location": {"type": "string", "location": "query"}, "maxVariants": {"type": "integer", "location": "query", "format": "int32"}, "categories.include": {"type": "string", "location": "query"}, "boostBy": {"type": "string", "location": "query"}, "safe": {"type": "boolean", "location": "query"}, "categories.useGcsConfig": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "location": "query", "format": "uint32"}, "facets.useGcsConfig": {"type": "boolean", "location": "query"}, "categories.enabled": {"type": "boolean", "location": "query"}, "plusOne.styles": {"type": "string", "location": "query"}, "attributeFilter": {"type": "string", "location": "query"}, "clickTracking": {"type": "boolean", "location": "query"}, "categoryRecommendations.enabled": {"type": "boolean", "location": "query"}, "thumbnails": {"type": "string", "location": "query"}, "language": {"type": "string", "location": "query"}, "categoryRecommendations.include": {"type": "string", "location": "query"}, "country": {"type": "string", "location": "query"}, "rankBy": {"type": "string", "location": "query"}, "restrictBy": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "redirects.enabled": {"type": "boolean", "location": "query"}, "redirects.useGcsConfig": {"type": "boolean", "location": "query"}, "relatedQueries.enabled": {"type": "boolean", "location": "query"}, "categoryRecommendations.useGcsConfig": {"type": "boolean", "location": "query"}, "promotions.useGcsConfig": {"type": "boolean", "location": "query"}}, "id": "shopping.products.list", "httpMethod": "GET", "path": "{source}/products", "response": {"$ref": "Products"}}, "get": {"scopes": ["https://www.googleapis.com/auth/shoppingapi"], "parameters": {"categories.include": {"type": "string", "location": "query"}, "recommendations.enabled": {"type": "boolean", "location": "query"}, "thumbnails": {"type": "string", "location": "query"}, "plusOne.useGcsConfig": {"type": "boolean", "location": "query"}, "source": {"required": true, "type": "string", "location": "path"}, "taxonomy": {"type": "string", "location": "query"}, "productIdType": {"required": true, "type": "string", "location": "path"}, "categories.useGcsConfig": {"type": "boolean", "location": "query"}, "plusOne.styles": {"type": "string", "location": "query"}, "recommendations.include": {"type": "string", "location": "query"}, "categories.enabled": {"type": "boolean", "location": "query"}, "location": {"type": "string", "location": "query"}, "plusOne.enabled": {"type": "boolean", "location": "query"}, "attributeFilter": {"type": "string", "location": "query"}, "recommendations.useGcsConfig": {"type": "boolean", "location": "query"}, "productId": {"required": true, "type": "string", "location": "path"}, "accountId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "shopping.products.get", "httpMethod": "GET", "path": "{source}/products/{accountId}/{productIdType}/{productId}", "response": {"$ref": "Product"}}}}', true));

    }
}

class Google_Product extends Google_Model
{
    public $selfLink;
    public $kind;
    public $product;
    public $requestId;
    public $recommendations;
    public $debug;
    public $id;
    public $categories;
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    protected $__productDataType = '';
    protected $__recommendationsType = 'Google_ShoppingModelRecommendationsJsonV1';
    protected $__recommendationsDataType = 'array';
    protected $__debugType = 'Google_ShoppingModelDebugJsonV1';
    protected $__debugDataType = '';
    protected $__categoriesType = 'Google_ShoppingModelCategoryJsonV1';
    protected $__categoriesDataType = 'array';

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    public function getRecommendations()
    {
        return $this->recommendations;
    }

    public function setRecommendations(/* array(Google_ShoppingModelRecommendationsJsonV1) */
        $recommendations)
    {
        $this->assertIsArray($recommendations, 'Google_ShoppingModelRecommendationsJsonV1', __METHOD__);
        $this->recommendations = $recommendations;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setDebug(Google_ShoppingModelDebugJsonV1 $debug)
    {
        $this->debug = $debug;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories(/* array(Google_ShoppingModelCategoryJsonV1) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_ShoppingModelCategoryJsonV1', __METHOD__);
        $this->categories = $categories;
    }
}

class Google_Products extends Google_Model
{
    public $promotions;
    public $selfLink;
    public $kind;
    public $stores;
    public $currentItemCount;
    public $items;
    public $facets;
    public $itemsPerPage;
    public $redirects;
    public $nextLink;
    public $relatedQueries;
    public $totalItems;
    public $startIndex;
    public $etag;
    public $requestId;
    public $categoryRecommendations;
    public $debug;
    public $spelling;
    public $previousLink;
    public $id;
    public $categories;
    protected $__promotionsType = 'Google_ProductsPromotions';
    protected $__promotionsDataType = 'array';
    protected $__storesType = 'Google_ProductsStores';
    protected $__storesDataType = 'array';
    protected $__itemsType = 'Google_Product';
    protected $__itemsDataType = 'array';
    protected $__facetsType = 'Google_ProductsFacets';
    protected $__facetsDataType = 'array';
    protected $__categoryRecommendationsType = 'Google_ShoppingModelRecommendationsJsonV1';
    protected $__categoryRecommendationsDataType = 'array';
    protected $__debugType = 'Google_ShoppingModelDebugJsonV1';
    protected $__debugDataType = '';
    protected $__spellingType = 'Google_ProductsSpelling';
    protected $__spellingDataType = '';
    protected $__categoriesType = 'Google_ShoppingModelCategoryJsonV1';
    protected $__categoriesDataType = 'array';

    public function getPromotions()
    {
        return $this->promotions;
    }

    public function setPromotions(/* array(Google_ProductsPromotions) */
        $promotions)
    {
        $this->assertIsArray($promotions, 'Google_ProductsPromotions', __METHOD__);
        $this->promotions = $promotions;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getStores()
    {
        return $this->stores;
    }

    public function setStores(/* array(Google_ProductsStores) */
        $stores)
    {
        $this->assertIsArray($stores, 'Google_ProductsStores', __METHOD__);
        $this->stores = $stores;
    }

    public function getCurrentItemCount()
    {
        return $this->currentItemCount;
    }

    public function setCurrentItemCount($currentItemCount)
    {
        $this->currentItemCount = $currentItemCount;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(/* array(Google_Product) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Product', __METHOD__);
        $this->items = $items;
    }

    public function getFacets()
    {
        return $this->facets;
    }

    public function setFacets(/* array(Google_ProductsFacets) */
        $facets)
    {
        $this->assertIsArray($facets, 'Google_ProductsFacets', __METHOD__);
        $this->facets = $facets;
    }

    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getRedirects()
    {
        return $this->redirects;
    }

    public function setRedirects(/* array(Google_string) */
        $redirects)
    {
        $this->assertIsArray($redirects, 'Google_string', __METHOD__);
        $this->redirects = $redirects;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getRelatedQueries()
    {
        return $this->relatedQueries;
    }

    public function setRelatedQueries(/* array(Google_string) */
        $relatedQueries)
    {
        $this->assertIsArray($relatedQueries, 'Google_string', __METHOD__);
        $this->relatedQueries = $relatedQueries;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getStartIndex()
    {
        return $this->startIndex;
    }

    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    public function getCategoryRecommendations()
    {
        return $this->categoryRecommendations;
    }

    public function setCategoryRecommendations(/* array(Google_ShoppingModelRecommendationsJsonV1) */
        $categoryRecommendations)
    {
        $this->assertIsArray($categoryRecommendations, 'Google_ShoppingModelRecommendationsJsonV1', __METHOD__);
        $this->categoryRecommendations = $categoryRecommendations;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setDebug(Google_ShoppingModelDebugJsonV1 $debug)
    {
        $this->debug = $debug;
    }

    public function getSpelling()
    {
        return $this->spelling;
    }

    public function setSpelling(Google_ProductsSpelling $spelling)
    {
        $this->spelling = $spelling;
    }

    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories(/* array(Google_ShoppingModelCategoryJsonV1) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_ShoppingModelCategoryJsonV1', __METHOD__);
        $this->categories = $categories;
    }
}

class Google_ProductsFacets extends Google_Model
{
    public $count;
    public $displayName;
    public $name;
    public $buckets;
    public $property;
    public $type;
    public $unit;
    protected $__bucketsType = 'Google_ProductsFacetsBuckets';
    protected $__bucketsDataType = 'array';

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBuckets()
    {
        return $this->buckets;
    }

    public function setBuckets(/* array(Google_ProductsFacetsBuckets) */
        $buckets)
    {
        $this->assertIsArray($buckets, 'Google_ProductsFacetsBuckets', __METHOD__);
        $this->buckets = $buckets;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property)
    {
        $this->property = $property;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
}

class Google_ProductsFacetsBuckets extends Google_Model
{
    public $count;
    public $minExclusive;
    public $min;
    public $max;
    public $value;
    public $maxExclusive;

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getMinExclusive()
    {
        return $this->minExclusive;
    }

    public function setMinExclusive($minExclusive)
    {
        $this->minExclusive = $minExclusive;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMin($min)
    {
        $this->min = $min;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMax($max)
    {
        $this->max = $max;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getMaxExclusive()
    {
        return $this->maxExclusive;
    }

    public function setMaxExclusive($maxExclusive)
    {
        $this->maxExclusive = $maxExclusive;
    }
}

class Google_ProductsPromotions extends Google_Model
{
    public $product;
    public $description;
    public $imageLink;
    public $destLink;
    public $customHtml;
    public $customFields;
    public $type;
    public $name;
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    protected $__productDataType = '';
    protected $__customFieldsType = 'Google_ProductsPromotionsCustomFields';
    protected $__customFieldsDataType = 'array';

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImageLink()
    {
        return $this->imageLink;
    }

    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;
    }

    public function getDestLink()
    {
        return $this->destLink;
    }

    public function setDestLink($destLink)
    {
        $this->destLink = $destLink;
    }

    public function getCustomHtml()
    {
        return $this->customHtml;
    }

    public function setCustomHtml($customHtml)
    {
        $this->customHtml = $customHtml;
    }

    public function getCustomFields()
    {
        return $this->customFields;
    }

    public function setCustomFields(/* array(Google_ProductsPromotionsCustomFields) */
        $customFields)
    {
        $this->assertIsArray($customFields, 'Google_ProductsPromotionsCustomFields', __METHOD__);
        $this->customFields = $customFields;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
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

class Google_ProductsPromotionsCustomFields extends Google_Model
{
    public $name;
    public $value;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_ProductsSpelling extends Google_Model
{
    public $suggestion;

    public function getSuggestion()
    {
        return $this->suggestion;
    }

    public function setSuggestion($suggestion)
    {
        $this->suggestion = $suggestion;
    }
}

class Google_ProductsStores extends Google_Model
{
    public $storeCode;
    public $name;
    public $storeName;
    public $storeId;
    public $telephone;
    public $location;
    public $address;

    public function getStoreCode()
    {
        return $this->storeCode;
    }

    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}

class Google_ShoppingModelCategoryJsonV1 extends Google_Model
{
    public $url;
    public $shortName;
    public $parents;
    public $id;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getShortName()
    {
        return $this->shortName;
    }

    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function setParents(/* array(Google_string) */
        $parents)
    {
        $this->assertIsArray($parents, 'Google_string', __METHOD__);
        $this->parents = $parents;
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

class Google_ShoppingModelDebugJsonV1 extends Google_Model
{
    public $searchRequest;
    public $rdcResponse;
    public $facetsRequest;
    public $searchResponse;
    public $elapsedMillis;
    public $facetsResponse;
    public $backendTimes;
    protected $__backendTimesType = 'Google_ShoppingModelDebugJsonV1BackendTimes';
    protected $__backendTimesDataType = 'array';

    public function getSearchRequest()
    {
        return $this->searchRequest;
    }

    public function setSearchRequest($searchRequest)
    {
        $this->searchRequest = $searchRequest;
    }

    public function getRdcResponse()
    {
        return $this->rdcResponse;
    }

    public function setRdcResponse($rdcResponse)
    {
        $this->rdcResponse = $rdcResponse;
    }

    public function getFacetsRequest()
    {
        return $this->facetsRequest;
    }

    public function setFacetsRequest($facetsRequest)
    {
        $this->facetsRequest = $facetsRequest;
    }

    public function getSearchResponse()
    {
        return $this->searchResponse;
    }

    public function setSearchResponse($searchResponse)
    {
        $this->searchResponse = $searchResponse;
    }

    public function getElapsedMillis()
    {
        return $this->elapsedMillis;
    }

    public function setElapsedMillis($elapsedMillis)
    {
        $this->elapsedMillis = $elapsedMillis;
    }

    public function getFacetsResponse()
    {
        return $this->facetsResponse;
    }

    public function setFacetsResponse($facetsResponse)
    {
        $this->facetsResponse = $facetsResponse;
    }

    public function getBackendTimes()
    {
        return $this->backendTimes;
    }

    public function setBackendTimes(/* array(Google_ShoppingModelDebugJsonV1BackendTimes) */
        $backendTimes)
    {
        $this->assertIsArray($backendTimes, 'Google_ShoppingModelDebugJsonV1BackendTimes', __METHOD__);
        $this->backendTimes = $backendTimes;
    }
}

class Google_ShoppingModelDebugJsonV1BackendTimes extends Google_Model
{
    public $serverMillis;
    public $hostName;
    public $name;
    public $elapsedMillis;

    public function getServerMillis()
    {
        return $this->serverMillis;
    }

    public function setServerMillis($serverMillis)
    {
        $this->serverMillis = $serverMillis;
    }

    public function getHostName()
    {
        return $this->hostName;
    }

    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getElapsedMillis()
    {
        return $this->elapsedMillis;
    }

    public function setElapsedMillis($elapsedMillis)
    {
        $this->elapsedMillis = $elapsedMillis;
    }
}

class Google_ShoppingModelProductJsonV1 extends Google_Model
{
    public $queryMatched;
    public $gtin;
    public $images;
    public $inventories;
    public $author;
    public $score;
    public $condition;
    public $providedId;
    public $internal8;
    public $description;
    public $gtins;
    public $internal1;
    public $brand;
    public $internal3;
    public $internal4;
    public $internal6;
    public $internal7;
    public $link;
    public $mpns;
    public $attributes;
    public $totalMatchingVariants;
    public $variants;
    public $modificationTime;
    public $categories;
    public $language;
    public $country;
    public $title;
    public $creationTime;
    public $internal14;
    public $internal12;
    public $internal13;
    public $internal10;
    public $plusOne;
    public $googleId;
    public $internal15;
    protected $__imagesType = 'Google_ShoppingModelProductJsonV1Images';
    protected $__imagesDataType = 'array';
    protected $__inventoriesType = 'Google_ShoppingModelProductJsonV1Inventories';
    protected $__inventoriesDataType = 'array';
    protected $__authorType = 'Google_ShoppingModelProductJsonV1Author';
    protected $__authorDataType = '';
    protected $__internal4Type = 'Google_ShoppingModelProductJsonV1Internal4';
    protected $__internal4DataType = 'array';
    protected $__attributesType = 'Google_ShoppingModelProductJsonV1Attributes';
    protected $__attributesDataType = 'array';
    protected $__variantsType = 'Google_ShoppingModelProductJsonV1Variants';
    protected $__variantsDataType = 'array';

    public function getQueryMatched()
    {
        return $this->queryMatched;
    }

    public function setQueryMatched($queryMatched)
    {
        $this->queryMatched = $queryMatched;
    }

    public function getGtin()
    {
        return $this->gtin;
    }

    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages(/* array(Google_ShoppingModelProductJsonV1Images) */
        $images)
    {
        $this->assertIsArray($images, 'Google_ShoppingModelProductJsonV1Images', __METHOD__);
        $this->images = $images;
    }

    public function getInventories()
    {
        return $this->inventories;
    }

    public function setInventories(/* array(Google_ShoppingModelProductJsonV1Inventories) */
        $inventories)
    {
        $this->assertIsArray($inventories, 'Google_ShoppingModelProductJsonV1Inventories', __METHOD__);
        $this->inventories = $inventories;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(Google_ShoppingModelProductJsonV1Author $author)
    {
        $this->author = $author;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    public function getProvidedId()
    {
        return $this->providedId;
    }

    public function setProvidedId($providedId)
    {
        $this->providedId = $providedId;
    }

    public function getInternal8()
    {
        return $this->internal8;
    }

    public function setInternal8(/* array(Google_string) */
        $internal8)
    {
        $this->assertIsArray($internal8, 'Google_string', __METHOD__);
        $this->internal8 = $internal8;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getGtins()
    {
        return $this->gtins;
    }

    public function setGtins(/* array(Google_string) */
        $gtins)
    {
        $this->assertIsArray($gtins, 'Google_string', __METHOD__);
        $this->gtins = $gtins;
    }

    public function getInternal1()
    {
        return $this->internal1;
    }

    public function setInternal1(/* array(Google_string) */
        $internal1)
    {
        $this->assertIsArray($internal1, 'Google_string', __METHOD__);
        $this->internal1 = $internal1;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getInternal3()
    {
        return $this->internal3;
    }

    public function setInternal3($internal3)
    {
        $this->internal3 = $internal3;
    }

    public function getInternal4()
    {
        return $this->internal4;
    }

    public function setInternal4(/* array(Google_ShoppingModelProductJsonV1Internal4) */
        $internal4)
    {
        $this->assertIsArray($internal4, 'Google_ShoppingModelProductJsonV1Internal4', __METHOD__);
        $this->internal4 = $internal4;
    }

    public function getInternal6()
    {
        return $this->internal6;
    }

    public function setInternal6($internal6)
    {
        $this->internal6 = $internal6;
    }

    public function getInternal7()
    {
        return $this->internal7;
    }

    public function setInternal7($internal7)
    {
        $this->internal7 = $internal7;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getMpns()
    {
        return $this->mpns;
    }

    public function setMpns(/* array(Google_string) */
        $mpns)
    {
        $this->assertIsArray($mpns, 'Google_string', __METHOD__);
        $this->mpns = $mpns;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes(/* array(Google_ShoppingModelProductJsonV1Attributes) */
        $attributes)
    {
        $this->assertIsArray($attributes, 'Google_ShoppingModelProductJsonV1Attributes', __METHOD__);
        $this->attributes = $attributes;
    }

    public function getTotalMatchingVariants()
    {
        return $this->totalMatchingVariants;
    }

    public function setTotalMatchingVariants($totalMatchingVariants)
    {
        $this->totalMatchingVariants = $totalMatchingVariants;
    }

    public function getVariants()
    {
        return $this->variants;
    }

    public function setVariants(/* array(Google_ShoppingModelProductJsonV1Variants) */
        $variants)
    {
        $this->assertIsArray($variants, 'Google_ShoppingModelProductJsonV1Variants', __METHOD__);
        $this->variants = $variants;
    }

    public function getModificationTime()
    {
        return $this->modificationTime;
    }

    public function setModificationTime($modificationTime)
    {
        $this->modificationTime = $modificationTime;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories(/* array(Google_string) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_string', __METHOD__);
        $this->categories = $categories;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCreationTime()
    {
        return $this->creationTime;
    }

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    public function getInternal14()
    {
        return $this->internal14;
    }

    public function setInternal14($internal14)
    {
        $this->internal14 = $internal14;
    }

    public function getInternal12()
    {
        return $this->internal12;
    }

    public function setInternal12($internal12)
    {
        $this->internal12 = $internal12;
    }

    public function getInternal13()
    {
        return $this->internal13;
    }

    public function setInternal13($internal13)
    {
        $this->internal13 = $internal13;
    }

    public function getInternal10()
    {
        return $this->internal10;
    }

    public function setInternal10(/* array(Google_string) */
        $internal10)
    {
        $this->assertIsArray($internal10, 'Google_string', __METHOD__);
        $this->internal10 = $internal10;
    }

    public function getPlusOne()
    {
        return $this->plusOne;
    }

    public function setPlusOne($plusOne)
    {
        $this->plusOne = $plusOne;
    }

    public function getGoogleId()
    {
        return $this->googleId;
    }

    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    public function getInternal15()
    {
        return $this->internal15;
    }

    public function setInternal15($internal15)
    {
        $this->internal15 = $internal15;
    }
}

class Google_ShoppingModelProductJsonV1Attributes extends Google_Model
{
    public $type;
    public $value;
    public $displayName;
    public $name;
    public $unit;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
}

class Google_ShoppingModelProductJsonV1Author extends Google_Model
{
    public $name;
    public $accountId;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
}

class Google_ShoppingModelProductJsonV1Images extends Google_Model
{
    public $status;
    public $link;
    public $thumbnails;
    protected $__thumbnailsType = 'Google_ShoppingModelProductJsonV1ImagesThumbnails';
    protected $__thumbnailsDataType = 'array';

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    public function setThumbnails(/* array(Google_ShoppingModelProductJsonV1ImagesThumbnails) */
        $thumbnails)
    {
        $this->assertIsArray($thumbnails, 'Google_ShoppingModelProductJsonV1ImagesThumbnails', __METHOD__);
        $this->thumbnails = $thumbnails;
    }
}

class Google_ShoppingModelProductJsonV1ImagesThumbnails extends Google_Model
{
    public $content;
    public $width;
    public $link;
    public $height;

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
}

class Google_ShoppingModelProductJsonV1Internal4 extends Google_Model
{
    public $node;
    public $confidence;

    public function getNode()
    {
        return $this->node;
    }

    public function setNode($node)
    {
        $this->node = $node;
    }

    public function getConfidence()
    {
        return $this->confidence;
    }

    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }
}

class Google_ShoppingModelProductJsonV1Inventories extends Google_Model
{
    public $installmentPrice;
    public $installmentMonths;
    public $distance;
    public $price;
    public $storeId;
    public $tax;
    public $shipping;
    public $currency;
    public $salePrice;
    public $originalPrice;
    public $distanceUnit;
    public $saleStartDate;
    public $availability;
    public $channel;
    public $saleEndDate;

    public function getInstallmentPrice()
    {
        return $this->installmentPrice;
    }

    public function setInstallmentPrice($installmentPrice)
    {
        $this->installmentPrice = $installmentPrice;
    }

    public function getInstallmentMonths()
    {
        return $this->installmentMonths;
    }

    public function setInstallmentMonths($installmentMonths)
    {
        $this->installmentMonths = $installmentMonths;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    public function getShipping()
    {
        return $this->shipping;
    }

    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getSalePrice()
    {
        return $this->salePrice;
    }

    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }

    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;
    }

    public function getSaleStartDate()
    {
        return $this->saleStartDate;
    }

    public function setSaleStartDate($saleStartDate)
    {
        $this->saleStartDate = $saleStartDate;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    public function getSaleEndDate()
    {
        return $this->saleEndDate;
    }

    public function setSaleEndDate($saleEndDate)
    {
        $this->saleEndDate = $saleEndDate;
    }
}

class Google_ShoppingModelProductJsonV1Variants extends Google_Model
{
    public $variant;
    protected $__variantType = 'Google_ShoppingModelProductJsonV1';
    protected $__variantDataType = '';

    public function getVariant()
    {
        return $this->variant;
    }

    public function setVariant(Google_ShoppingModelProductJsonV1 $variant)
    {
        $this->variant = $variant;
    }
}

class Google_ShoppingModelRecommendationsJsonV1 extends Google_Model
{
    public $recommendationList;
    public $type;
    protected $__recommendationListType = 'Google_ShoppingModelRecommendationsJsonV1RecommendationList';
    protected $__recommendationListDataType = 'array';

    public function getRecommendationList()
    {
        return $this->recommendationList;
    }

    public function setRecommendationList(/* array(Google_ShoppingModelRecommendationsJsonV1RecommendationList) */
        $recommendationList)
    {
        $this->assertIsArray($recommendationList, 'Google_ShoppingModelRecommendationsJsonV1RecommendationList', __METHOD__);
        $this->recommendationList = $recommendationList;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_ShoppingModelRecommendationsJsonV1RecommendationList extends Google_Model
{
    public $product;
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    protected $__productDataType = '';

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }
}
