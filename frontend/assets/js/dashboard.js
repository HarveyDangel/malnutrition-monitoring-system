$(function () {


  // =====================================
  // Bar graph
  // =====================================
  var chart = {
    series: [
      { name: "Normal", data: [30, 45, 40, 20, 100, 140 , 200, 300,] },
      { name: "Underweight", data: [355, 390, 300, 350, 390, 180, 355, 390] },
      { name: "Severely Underweight", data: [30, 45, 40, 20, 40, 23, 45, 90] },
      { name: "Stunted", data: [280, 250, 325, 215, 250, 310, 280, 250] },
      { name: "Severly Stunted", data: [40, 30, 55, 65, 70, 40, 30, 100] },
      { name: "Wasted", data: [50, 100, 25, 15, 50, 10, 5, 25] },
      { name: "Severely Wasted", data: [10, 15, 13, 18, 19, 12, 11, 17] },
      { name: "Overweight", data: [30, 20, 45, 60, 78, 30, 65, 90] },
      { name: "Obesity", data: [23, 25, 10, 14, 19, 10, 15, 17] },

    ],

    chart: {
      type: "bar",
      height: 345,
      offsetX: -15,
      toolbar: { show: true },
      foreColor: "#adb0bb",
      fontFamily: 'inherit',
      sparkline: { enabled: false },
    },


    colors: ["#9FC2A1", "#5DFF6B", "#229C2D", "#49F3FF", "#5589FF", "#ECE91D", "#DAA514", "#C43434", "#CA34A1"],


    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "90%",
        borderRadius: [6],
        borderRadiusApplication: 'end',
        borderRadiusWhenStacked: 'all'
      },
    },
    markers: { size: 0 },

    dataLabels: {
      enabled: false,
    },


    legend: {
      show: true,
    },


    grid: {
      borderColor: "rgba(0,0,0,0.1)",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: false,
        },
      },
    },

    xaxis: {
      type: "category",
      categories: ["Almeria","Biliran" ,"Cabucgayan", "Caibiran", "Culaba","Kawayan", "Maripipi", "Naval"],
      labels: {
        style: { cssClass: "grey--text lighten-2--text fill-color" },
      },
    },


    yaxis: {
      show: true,
      min: 0,
      max: 400,
      tickAmount: 4,
      labels: {
        style: {
          cssClass: "grey--text lighten-2--text fill-color",
        },
      },
    },
    stroke: {
      show: true,
      width: 3,
      lineCap: "butt",
      colors: ["transparent"],
    },


    tooltip: { theme: "light" },

    responsive: [
      {
        breakpoint: 600,
        options: {
          plotOptions: {
            bar: {
              borderRadius: 3,
            }
          },
        }
      }
    ]


  };

  var chart = new ApexCharts(document.querySelector("#chart"), chart);
  chart.render();


  /**-------------------------
   By Municipal chart
  ---------------------------- */

  var municipalChart = {
    series: [
      { name: "Normal", data: [30, 45, 40, 20] },
      { name: "Underweight", data: [30, 45, 40, 20] },
      { name: "Severely Underweight", data: [30, 45, 40, 20] },
      { name: "Stunted", data: [40, 35, 20, 10] },
      { name: "Severely Stunted", data: [13, 15, 9, 10] },
      { name: "Wasted", data: [17, 12, 7, 5] },
      { name: "Severely Wasted", data: [12, 15, 12, 10] },
      { name: "Overweight", data: [15, 5, 7, 5] },
      { name: "Obesity", data: [12, 15, 12, 10] },

    ],

    chart: {
      type: "bar",
      height: 345,
      offsetX: -15,
      toolbar: { show: true },
      foreColor: "#adb0bb",
      fontFamily: 'inherit',
      sparkline: { enabled: false },
    },


    colors: ["#9FC2A1", "#5DFF6B", "#229C2D", "#49F3FF", "#5589FF", "#ECE91D", "#DAA514", "#C43434", "#CA34A1"],


    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "75%",
        borderRadius: [6],
        borderRadiusApplication: 'end',
        borderRadiusWhenStacked: 'all'
      },
    },
    markers: { size: 0 },

    dataLabels: {
      enabled: false,
    },


    legend: {
      show: true,
    },


    grid: {
      borderColor: "rgba(0,0,0,0.1)",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: false,
        },
      },
    },

    xaxis: {
      type: "category",
      categories: ["1st Quarter","2nd Quarter" ,"3rd Quarter", "4th Quarter",],
      labels: {
        style: { cssClass: "grey--text lighten-2--text fill-color" },
      },
    },


    yaxis: {
      show: true,
      min: 0,
      max: 100,
      tickAmount: 4,
      labels: {
        style: {
          cssClass: "grey--text lighten-2--text fill-color",
        },
      },
    },
    stroke: {
      show: true,
      width: 3,
      lineCap: "butt",
      colors: ["transparent"],
    },


    tooltip: { theme: "light" },

    responsive: [
      {
        breakpoint: 600,
        options: {
          plotOptions: {
            bar: {
              borderRadius: 3,
            }
          },
        }
      }
    ]


  };

  var chart = new ApexCharts(document.querySelector("#municipalChart"), municipalChart);
  chart.render();


  // =====================================
  // Donut 
  // =====================================
  // var breakup = {
  //   color: "#adb5bd",
  //   series: [6, 20, 25, 10, 10, 10],
  //   labels: ["Underweight", "Severely Underweight", "Stunted", "Severely Stunted", "Wasted", "Severely Wasted"],
  //   chart: {
  //     width: 400,
  //     type: "donut",
  //     fontFamily: "Plus Jakarta Sans', sans-serif",
  //     foreColor: "#1a1a00",
  //   },
  //   plotOptions: {
  //     pie: {
  //       startAngle: 0,
  //       endAngle: 360,
  //       donut: {
  //         size: '50%',
  //       },
  //     },
  //   },
  //   stroke: {
  //     show: true,
  //   },

  //   dataLabels: {
  //     enabled: true,
  //   },

  //   legend: {
  //     show: true,
  //   },
  //   colors: ["#40bf80", "#339966", "#e6b800", "#cca300", "#ff6347", "#ff4d2e"],

  //   responsive: [
  //     {
  //       breakpoint: 100,
  //       options: {
  //         chart: {
  //           width: 150,
  //         },
  //       },
  //     },
  //   ],
  //   tooltip: {
  //     theme: "dark",
  //     fillSeriesColor: true,
  //   },
  // };

  // var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
  // chart.render();



  // =====================================
  // Line Graph malnourish case
  // =====================================
  var malnuorish = {
    chart: {
      id: "sparkline3",
      type: "area",
      height: 100,
      sparkline: {
        enabled: true,
      },
      group: "sparklines",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    series: [
      {
        name: ["Prevalence %"],
        color: "#1f8f30",
        data: [70, 90, 60, 74],

      },
    ],
    stroke: {
      curve: "smooth",
      width: 2,
    },
    fill: {
      colors: ["#f3feff"], //
      type: "solid",
      opacity: 0.05,
    },

    markers: {
      size: 7,
    },
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: true,
        position: "right",
      },
      x: {
        show: false,
      },
    },
  };
  new ApexCharts(document.querySelector("#malnourish"), malnuorish).render();


  var healthInfo = {
    chart: {
      id: "sparkline3",
      type: "area",
      height: 100,
      sparkline: {
        enabled: true,
      },
      group: "sparklines",
      fontFamily: "Plus Jakarta Sans', sans-serif",
      foreColor: "#adb0bb",
    },
    series: [
      {
        name: "cm",
        color: "#1f8f30",
        data: [20, 22, 24, 25, 31, 39, 46, 50, 58, 63, 70],
      },
      {
        name: "kg",
        color: "#1f8f30",
        data: [2, 3, 5, 6, 7, 8, 10, 12, 15, 17, 15],
      },
    ],
    stroke: {
      curve: "smooth",
      width: 2,
    },
    fill: {
      colors: ["#f3feff"],
      type: "solid",
      opacity: 0.05,
    },

    markers: {
      size: 7,
    },
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: true,
        position: "right",
      },
      x: {
        show: false,
      },
    },
  };
  new ApexCharts(document.querySelector("#healthInfo"), healthInfo).render();
})