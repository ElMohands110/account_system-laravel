$((function(){var e;(e=new jvm.Map({container:$("#regionSelection"),map:"de_merc",zoomOnScroll:!1,zoomMin:1,regionsSelectable:!0,markersSelectable:!0,markers:[{latLng:[52.5,13.39],name:"Berlin"},{latLng:[53.56,10],name:"Hamburg"},{latLng:[48.13,11.56],name:"Munich"},{latLng:[50.95,6.96],name:"Cologne"},{latLng:[50.11,8.68],name:"Frankfurt am Main"},{latLng:[48.77,9.17],name:"Stuttgart"},{latLng:[51.23,6.78],name:"Düsseldorf"},{latLng:[51.51,7.46],name:"Dortmund"},{latLng:[51.45,7.01],name:"Essen"},{latLng:[53.07,8.8],name:"Bremen"}],markerStyle:{initial:{fill:"#ffffff"},selected:{fill:"#ffbf05"}},regionStyle:{initial:{fill:"#ffffff"},selected:{fill:"#333333"}},series:{markers:[{attribute:"r",scale:[5,15],values:[887.7,755.16,310.69,405.17,248.31,207.35,217.22,280.71,210.32,325.42]}]},backgroundColor:"transparent",onRegionSelected:function(){window.localStorage&&window.localStorage.setItem("jvectormap-selected-regions",JSON.stringify(e.getSelectedRegions()))},onMarkerSelected:function(){window.localStorage&&window.localStorage.setItem("jvectormap-selected-markers",JSON.stringify(e.getSelectedMarkers()))}})).setSelectedRegions(JSON.parse(window.localStorage.getItem("jvectormap-selected-regions")||"[]")),e.setSelectedMarkers(JSON.parse(window.localStorage.getItem("jvectormap-selected-markers")||"[]"))}));