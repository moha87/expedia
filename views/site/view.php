<div id="map"></div>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-4">
                <label>travelStartDate</label>
                <div><?= $offers->offerDateRange->travelStartDate[0].'-'.$offers->offerDateRange->travelStartDate[1].'-'.$offers->offerDateRange->travelStartDate[2]; ?></div>
            </div>
            <div class="col-md-4">
                <label>travelStartDate</label>
                <div><?= $offers->offerDateRange->travelEndDate[0].'-'.$offers->offerDateRange->travelEndDate[1].'-'.$offers->offerDateRange->travelEndDate[2]?></div>
            </div>
            <div class="col-md-4">
                <label>lengthOfStay</label>
                <div><?= $offers->offerDateRange->lengthOfStay ?></div>
            </div>
        </div>
        <div class="row">
            <h2>Destination</h2>
            <table id="example1" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>regionID</th>
                    <th>associatedMultiCityRegionId</th>
                    <th>longName</th>
                    <th>shortName</th>
                    <th>country</th>
                    <th>province</th>
                    <th>city</th>
                    <th>tla</th>
                    <th>nonLocalizedCity</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $offers->destination->regionID ?></td>
                        <td><?= $offers->destination->associatedMultiCityRegionId ?></td>
                        <td><?= $offers->destination->longName ?></td>
                        <td><?= $offers->destination->shortName ?></td>
                        <td><?= $offers->destination->country ?></td>
                        <td><?= $offers->destination->province ?></td>
                        <td><?= $offers->destination->city ?></td>
                        <td><?= $offers->destination->tla ?></td>
                        <td><?= $offers->destination->nonLocalizedCity ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h2>hotel Info</h2>
            <img src="<?= $offers->hotelInfo->hotelImageUrl ?>">
            <div class="row">
                <div class="col-md-3">
                    <label>hotelId</label>
                    <div><?= $offers->hotelInfo->hotelId ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelName</label>
                    <div><?= $offers->hotelInfo->hotelName ?></div>
                </div>
                <div class="col-md-3">
                    <label>localizedHotelName</label>
                    <div><?= $offers->hotelInfo->localizedHotelName ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelDestination</label>
                    <div><?= $offers->hotelInfo->hotelDestination ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelDestinationRegionID</label>
                    <div><?= $offers->hotelInfo->hotelDestinationRegionID ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelLongDestination</label>
                    <div><?= $offers->hotelInfo->hotelLongDestination ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelStreetAddress</label>
                    <div><?= $offers->hotelInfo->hotelStreetAddress ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelCity</label>
                    <div><?= $offers->hotelInfo->hotelCity ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelProvince</label>
                    <div><?= $offers->hotelInfo->hotelProvince ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelCountryCode</label>
                    <div><?= $offers->hotelInfo->hotelCountryCode ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelStarRating</label>
                    <div><?= $offers->hotelInfo->hotelStarRating ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelGuestReviewRating</label>
                    <div><?= $offers->hotelInfo->hotelGuestReviewRating ?></div>
                </div>
                <div class="col-md-3">
                    <label>hotelReviewTotal</label>
                    <div><?= $offers->hotelInfo->hotelReviewTotal ?></div>
                </div>
                <div class="col-md-3">
                    <label>vipAccess</label>
                    <div><?= $offers->hotelInfo->vipAccess ?></div>
                </div>
                <div class="col-md-3">
                    <label>isOfficialRating</label>
                    <div><?= ($offers->hotelInfo->isOfficialRating)?'Yes':'No' ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <h2>hotelPricingInfo</h2>
            <table id="example3" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>averagePriceValue</th>
                    <th>totalPriceValue</th>
                    <th>crossOutPriceValue</th>
                    <th>originalPricePerNight</th>
                    <th>currency</th>
                    <th>percentSavings</th>
                    <th>drr</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $offers->hotelPricingInfo->averagePriceValue ?></td>
                    <td><?= $offers->hotelPricingInfo->totalPriceValue ?></td>
                    <td><?= $offers->hotelPricingInfo->crossOutPriceValue ?></td>
                    <td><?= $offers->hotelPricingInfo->originalPricePerNight ?></td>
                    <td><?= $offers->hotelPricingInfo->currency ?></td>
                    <td><?= $offers->hotelPricingInfo->percentSavings ?></td>
                    <td><?= ($offers->hotelPricingInfo->drr)?'Yes':'No' ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h2>hotelUrls</h2>
            <table id="example5" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>hotelInfositeUrl</th>
                    <th>hotelSearchResultUrl</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a class="btn btn-primary" href="<?= utf8_decode(urldecode($offers->hotelUrls->hotelInfositeUrl)) ?>">Info Site</a></td>
                    <td><a class="btn btn-primary" href="<?= utf8_decode(urldecode($offers->hotelUrls->hotelSearchResultUrl)) ?>">Search</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVpg6Gv-KAT6nsgcAdyMOquD53iTZl4kE&callback=initMap">
</script>
<script>
    function initMap() {
        var uluru = {lat: <?= $offers->hotelInfo->hotelLatitude ?>, lng: <?= $offers->hotelInfo->hotelLongitude ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<?php $this->registerJs("$(document).ready(function() {
        $('#example1').DataTable({
  \"searching\": false,\"bPaginate\": false,
});
    } );");?>
<?php $this->registerJs("$(document).ready(function() {
        $('#example3').DataTable({
  \"searching\": false,\"bPaginate\": false,
});
    } );");?>
<?php $this->registerJs("$(document).ready(function() {
        $('#example4').DataTable({
  \"searching\": false,\"bPaginate\": false,
});
    } );");?>
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>