<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Statistics</title>
    <link rel="shortcut icon" href="{{ asset(assets/images/Color logo - no background.png) }}" type="image/x-icon">
    <script src="{{ asset(assets/JS/anychart-base.min.js) }}"></script>
    <script src="{{ asset(assets/JS/anychart-ui.min.js) }}"></script>
    <script src="{{ asset(assets/JS/anychart-exports.min.js) }}"></script>
    <link href="{{ asset(assets/CSS/anychart-ui.min.css) }}" type="text/css" rel="stylesheet">
    <link href="{{ asset(assets/CSS/anychart-font.min.css) }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(assets/CSS/all.min.css) }}">
    <link rel="stylesheet" href="{{ asset(assets/CSS/animate.css) }}">
    <link rel="stylesheet" href="{{ asset(assets/CSS/bootstrap.min.css) }}">
    <link rel="stylesheet" href="{{ asset(assets/CSS/aos.css) }}">
    <link rel="stylesheet" href="{{ asset(assets/CSS/style.css) }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 sidebar">
                <div class="container m-auto p-1 ">
                    <div class="mt-2 p-3 mb-5 pb-5">
                        <a href="index.html"><img src="{{ asset(assets/images/White logo - no background-no name.svg) }}" alt="STEMA-Logo"
                                width="50px"></a>


                    </div>
                </div>
            </div> <!-- end sideBar -->


            <div class="col-lg-11 files">
                <div class="container m-auto">
                  <div class="row d-flex ">
                      <div class="col-lg-1 p-4 mt-2">
                          <a href="services.html">
                              <i class="fas fa-arrow-left fa-2x"></i>
                          </a>
                      </div> <!-- back button -->

                      <div class="col-lg-4 p-4 d-flex search">
                          <input type="search" class="form-control" placeholder="Find Document" height="20px">
                          <i class="fa  fa-search m-1 p-2" aria-hidden="true"></i>
                      </div> <!-- search -->
                      <div class="col-lg-1"></div>
                      <div class="col-lg-5 hstack gap-2  ms-auto user">
                          <div class=" ms-auto mt-4">
                              <h6>Dr/ Ali Mohammed</h6>
                              <p class="text-muted">
                                  Regenerative medicine specialist
                              </p>
                          </div>
                          <div class="hstack gap-2 ">
                              <a href="profile.html"> <img src="{{ asset(assets/images/mydoctor.jpg) }}" alt="user-photo" width="60px"></a>

                          </div>

                      </div>
                      <div class="col-lg-1"></div>



                  </div> <!-- end of row doctor photo-->

                    <h3 class="mt-2">Data overview</h3>
                    <div class="row status">
                        <div class="col-3 mt-5 ms-1 mb-0 p-0 d-flex  Accepted ">
                            <img class="p-2 m-3 accpt" src="{{ asset(assets/images/accepted.svg) }}" width="20%" height="60%">
                            <div class="m-1">
                                <p class="text-muted p-0 m-0">Accepted data</p>
                                <p class="p-0" style="font-size: 30px;">24 <img src="{{ asset(assets/images/accepted-arrow.png) }}" alt="">
                                </p>

                            </div>
                        </div> <!-- Accepted -->

                        <div class="col-1"></div> <!-- div-separated -->

                        <div class="col-3 mt-5 ms-1 mb-0 p-0 d-flex Rejected ">
                            <img src="{{ asset(assets/) }}images/rejected.svg" class="p-2 m-3 rejct" width="20%" height="60%">
                            <div class=" m-1">
                                <p class="text-muted p-0 m-0">Rejected data</p>
                                <p class="p-0" style="font-size: 30px;">28 <img src="{{ asset(assets/images/rejected-arrow.png) }}" alt="">
                                </p>

                            </div>
                        </div> <!-- Rejected -->

                        <div class="col-1"></div> <!-- div-separated -->

                        <div class="col-3 mt-5 ms-1 mb-0 p-0 d-flex Pendding ">
                            <img src="images/pend.svg" class="p-2 m-3 pnd" width="20%" height="60%">
                            <div class="m-1">
                                <p class="text-muted p-0 m-0">Pendding</p>
                                <p class="p-0" style="font-size: 30px;">5 <img src="{{ asset(assets/images/pend-arrow.png) }}" alt=""></p>

                            </div>
                        </div> <!-- Pendding -->

                        <div class="col-1"></div> <!-- div-separated -->

                    </div> <!-- end of row  -->
                    <div class="row charts mt-2 p-3">
                        <div id="container" class="col-5 chart1 ">
                            <!-- <div  class="bg-black"></div> -->
                        </div> <!-- Donate Chart -->

                        <div class="col-1"></div> <!-- div-separated -->

                        <div id="container2" class="col-5 chart2 p-1 m-1">
                            <!-- <div id="container2"></div> -->
                        </div> <!-- Column Chart -->
                    </div>
                    <form class="d-flex hstack gap-2 me-5" >
                        <button class="btn ms-auto close m-2" >Close</button>
                    </form>

                </div> <!-- end container -->

            </div>
            <!--end files div  -->
        </div> <!-- end row -->

    </div>




    <script src="{{ asset(assets/JS/bootstrap.bundle.min.js) }}"></script>
    <script src="{{ asset(assets/JS/wow.min.js) }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset(assets/JS/aos.js) }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        anychart.onDocumentReady(function () {
            // set chart theme
            // anychart.theme('pastel');
            // create pie chart with passed data
            var chart = anychart.pie([
                ['6-7', 50.3],
                ['7-8', 22],
                ['8-9', 18.5],
                ['10-11', 25.2]
            ]);

            // creates palette
            var palette = anychart.palettes.distinctColors();
            palette.items([{
                    color: '#0EB0BA'
                },
                {
                    color: '#E57361'
                },
                {
                    color: '#F4A952'
                },
                {
                    color: '#B9C1FB'
                }
            ]);

            // set chart radius
            chart
                .radius('100%')
                // create empty area in pie chart
                .innerRadius('90%')
                // set chart palette
                .palette(palette);

            // set outline settings

            // format tooltip
            chart.tooltip().format('Percent Value: {%PercentValue}%');

            // create standalone label and set label settings
            var label = anychart.standalones.label();
            label
                .enabled(true)
                .text('LABEL')
                .width('100%')
                .height('100%')
                .adjustFontSize(true, true)
                .minFontSize(10)
                .maxFontSize(25)
                .fontColor('#60727b')
                .position('center')
                .anchor('center')
                .hAlign('center')
                .vAlign('middle');

            // set label to center content of chart
            chart.center().content(label);
            // set the chart title
            chart.title("Volume");


            // set container id for the chart
            chart.container('container');

            // initiate chart drawing
            chart.draw();
        });

        // column chart
        anychart.onDocumentReady(function () {


    //   create data
      var data = [{
          x: "6-7",
          value: 47,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "7-8",
          value: 50,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "8-9",
          value: 43,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "9-10",
          value: 35,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "10-11",
          value: 46,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "11-12",
          value: 54,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        },
        {
          x: "12-13",
          value: 53,
          normal: {
            fill: "#0EB0BA",
            stroke: null,
            label: {
              enabled: true
            }
          },
          hovered: {
            fill: "#76D2D7",
            stroke: null,
            label: {
              enabled: true
            }
          },
          selected: {
            fill: "#109aa1",
            stroke: null,
            label: {
              enabled: true
            }
          }
        }
      ];

      // create a chart
      chart = anychart.column();
      // set the chart title
      chart.title("Range of WBCs");


      // create a column series and set the data
      var series = chart.column(data);

      // display the chart in the container
      chart.container("container2");

      // initiate drawing the chart
      chart.draw();

    });
    </script>

</body>

</html>
