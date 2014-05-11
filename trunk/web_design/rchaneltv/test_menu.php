<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../../kendoui/js/kendo.web.min.js"></script>

<link href="../../kendoui/styles/kendo.common.min.css" rel="stylesheet" />
<link href="../../kendoui/styles/kendo.default.min.css" rel="stylesheet" />


<div id="example" class="k-content">
        <div id="megaStore">
            <ul id="menu">
                <li>
                    Products
                    <ul>
                        <li>
                            Furniture
                            <ul> <!-- moving the UL to the next line will cause an IE7 problem -->
                                <li>Tables & Chairs</li>
                                <li>Sofas</li>
                                <li>Occasional Furniture</li>
                                <li>Childerns Furniture</li>
                                <li>Beds</li>
                            </ul>


                        </li>
                        <li>
                            Decor
                            <ul> <!-- moving the UL to the next line will cause an IE7 problem -->
                                <li>Bed Linen</li>
                                <li>Throws</li>
                                <li>Curtains & Blinds</li>
                                <li>Rugs</li>
                                <li>Carpets</li>
                            </ul>
                        </li>
                        <li>
                            Storage
                            <ul> <!-- moving the UL to the next line will cause an IE7 problem -->
                                <li>Wall Shelving</li>
                                <li>Kids Storage</li>
                                <li>Baskets</li>
                                <li>Multimedia Storage</li>
                                <li>Floor Shelving</li>
                                <li>Toilet Roll Holders</li>
                                <li>Storage Jars</li>
                                <li>Drawers</li>
                                <li>Boxes</li>
                            </ul>

                        </li>
                        <li>
                            Lights
                            <ul> <!-- moving the UL to the next line will cause an IE7 problem -->
                                <li>Ceiling</li>
                                <li>Table</li>
                                <li>Floor</li>
                                <li>Shades</li>
                                <li>Wall Lights</li>
                                <li>Spotlights</li>
                                <li>Push Light</li>
                                <li>String Lights</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Stores
                    <ul>
                        <li>
                            <div id="template" class="k-content" style="padding: 10px;">
                                <h2>Around the Globe</h2>
                                <ol>
                                    <li>United States</li>
                                    <li>Europe</li>
                                    <li>Canada</li>
                                    <li>Australia</li>
                                </ol>
                                <img src="../../content/web/menu/map.png" alt="Stores Around the Globe" />
                                <button class="k-button">See full list</button>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    Blog
                </li>
                <li>
                    Company
                </li>
                <li>
                    Events
                </li>
                <li disabled="disabled">
                    News
                </li>
            </ul>
        </div>
        <style scoped>
            #megaStore {
                width: 600px;
                margin: 30px auto;
                padding-top: 120px;
                background: url('../../content/web/menu/header.jpg') no-repeat 0 0;
            }
            #menu h2 {
                font-size: 1em;
                text-transform: uppercase;
                padding: 5px 10px;
            }
            #template img {
                margin: 5px 20px 0 0;
                float: left;
            }
            #template {
                width: 380px;
            }
            #template ol {
                float: left;
                margin: 0;
                padding: 10px 10px 0 10px;
            }
            #template:after {
                content: ".";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            #template .k-button {
                float: left;
                clear: left;
                margin: 5px 0 5px 12px;
            }
        </style>
        <script>
            $(document).ready(function() {
                $("#menu").kendoMenu();
            });
        </script>
    </div>