/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/alpine.js ***!
  \********************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

document.addEventListener('alpine:init', function () {
  Alpine.data('methodology', function () {
    return {
      intro: true,
      thematicDropdown: false,
      thematic: true,
      economicdev: false,
      qframework1: false,
      bConduct: false,
      qframework2: false,
      lManagement: false,
      qframework3: false,
      cWellbeing: false,
      qframework4: false,
      wCondition: false,
      qframework5: false,
      eResponsibility: false,
      qframework6: false,
      loadingSkeleton: false,
      colorthematic: false,
      toogleIntro: function toogleIntro() {
        this.intro = true, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = false;
      },
      toogleEconomicdev: function toogleEconomicdev() {
        this.intro = false, this.economicdev = true, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework1: function toogleqFramework1() {
        this.intro = false, this.economicdev = false, this.qframework1 = true, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      tooglebConduct: function tooglebConduct() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = true, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework2: function toogleqFramework2() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = true, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      tooglelManagement: function tooglelManagement() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = true, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework3: function toogleqFramework3() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = true, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      tooglecWellbeing: function tooglecWellbeing() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = true, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework4: function toogleqFramework4() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = true, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      tooglewCondition: function tooglewCondition() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = true, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework5: function toogleqFramework5() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = true, this.eResponsibility = false, this.qframework6 = false, this.colorthematic = true;
      },
      toogleeResponsibility: function toogleeResponsibility() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = true, this.qframework6 = false, this.colorthematic = true;
      },
      toogleqFramework6: function toogleqFramework6() {
        this.intro = false, this.economicdev = false, this.qframework1 = false, this.qframework2 = false, this.bConduct = false, this.lManagement = false, this.qframework3 = false, this.cWellbeing = false, this.qframework4 = false, this.wCondition = false, this.qframework5 = false, this.eResponsibility = false, this.qframework6 = true;
      }
    };
  });
  Alpine.data('corporateProfiles', function () {
    return {
      Overview: true,
      Operation: false,
      Financial: false,
      Ownership: false,
      CorporateNetwork: false,
      Spotlight: false,
      dataBconduct: false,
      eResponsibility: false,
      eEconomicdevelopment: false,
      eLifecyclemanagement: false,
      eCommunitywellbeing: false,
      eWorkingCondition: false,
      toogleOverview: function toogleOverview() {
        this.Overview = true, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleOperation: function toogleOperation() {
        this.Overview = false, this.Operation = true, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleFinancial: function toogleFinancial() {
        this.Overview = false, this.Operation = false, this.Financial = true, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleOwnership: function toogleOwnership() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = true, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false;
        this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleCorporateNetwork: function toogleCorporateNetwork() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = true, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false;
        this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleSpotlight: function toogleSpotlight() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = true, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleDataBconduct: function toogleDataBconduct() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = true, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleeResponsibility: function toogleeResponsibility() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = true, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleEconomicDevelopment: function toogleEconomicDevelopment() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = true, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleLifecyclemanagement: function toogleLifecyclemanagement() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = true, this.eCommunitywellbeing = false, this.eWorkingCondition = false;
      },
      toogleCommunitywellbeing: function toogleCommunitywellbeing() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = true, this.eWorkingCondition = false;
      },
      toogleWorkingcondition: function toogleWorkingcondition() {
        this.Overview = false, this.Operation = false, this.Financial = false, this.Ownership = false, this.CorporateNetwork = false, this.Spotlight = false, this.dataBconduct = false, this.eResponsibility = false, this.eEconomicdevelopment = false, this.eLifecyclemanagement = false, this.eCommunitywellbeing = false, this.eWorkingCondition = true;
      }
    };
  });
  Alpine.data('qframework6', function () {
    var _ref;

    return _ref = {
      F01: false,
      F02: false,
      F03: false,
      F04: false,
      F05: false,
      F06: false,
      F07: false,
      F08: false,
      F011: false,
      F012: false,
      F023: false,
      F021: false,
      F022: false,
      F031: false,
      F032: false,
      F033: false,
      F041: false,
      F051: false,
      F052: false,
      F061: false,
      F062: false,
      F063: false,
      F071: false,
      F081: false,
      F082: false,
      toogleF01: function toogleF01() {
        this.F01 = !this.F01, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleF02: function toogleF02() {
        this.F01 = false, this.F02 = !this.F02, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleF03: function toogleF03() {
        this.F01 = false, this.F02 = false, this.F03 = !this.F03, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleF04: function toogleF04() {
        this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = !this.F04, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleF05: function toogleF05() {
        this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = !this.F05, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
          top: 350,
          left: 1400,
          behavior: 'smooth'
        });
      }
    }, _defineProperty(_ref, "toogleF05", function toogleF05() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = !this.F05, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 350,
        left: 1400,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF06", function toogleF06() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = !this.F06, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 350,
        left: 1400,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF07", function toogleF07() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = !this.F07, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 350,
        left: 1400,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF08", function toogleF08() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = !this.F08, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 350,
        left: 1400,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF011", function toogleF011() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = !this.F011, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF012", function toogleF012() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = !this.F012, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF021", function toogleF021() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = !this.F021, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF022", function toogleF022() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = !this.F022, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF023", function toogleF023() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = !this.F023, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF031", function toogleF031() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = !this.F031, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF032", function toogleF032() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = !this.F032, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF033", function toogleF033() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = !this.F033, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 662,
        left: 915,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF041", function toogleF041() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = !this.F041, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1044,
        left: 1488,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF051", function toogleF051() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = !this.F051, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1144,
        left: 1488,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF052", function toogleF052() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = !this.F052, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1144,
        left: 1488,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF061", function toogleF061() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = !this.F061, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1300,
        left: 1159,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF062", function toogleF062() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = !this.F062, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1400,
        left: 1159,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF063", function toogleF063() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = !this.F063, this.F071 = false, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1500,
        left: 1159,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF071", function toogleF071() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = !this.F071, this.F081 = false, this.F082 = false, window.scrollTo({
        top: 1600,
        left: 1159,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF081", function toogleF081() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = !this.F081, this.F082 = false, window.scrollTo({
        top: 1600,
        left: 1159,
        behavior: 'smooth'
      });
    }), _defineProperty(_ref, "toogleF082", function toogleF082() {
      this.F01 = false, this.F02 = false, this.F03 = false, this.F04 = false, this.F05 = false, this.F06 = false, this.F07 = false, this.F08 = false, this.F011 = false, this.F012 = false, this.F023 = false, this.F021 = false, this.F022 = false, this.F031 = false, this.F032 = false, this.F033 = false, this.F041 = false, this.F051 = false, this.F052 = false, this.F061 = false, this.F062 = false, this.F063 = false, this.F071 = false, this.F081 = false, this.F082 = !this.F082, window.scrollTo({
        top: 1700,
        left: 1159,
        behavior: 'smooth'
      });
    }), _ref;
  });
  Alpine.data('qframework2', function () {
    return {
      B01: false,
      B02: false,
      B03: false,
      B04: false,
      B05: false,
      B06: false,
      B07: false,
      B08: false,
      B011: false,
      B012: false,
      B013: false,
      B021: false,
      B022: false,
      B031: false,
      B041: false,
      B051: false,
      B061: false,
      B071: false,
      B081: false,
      toogleB01: function toogleB01() {
        this.B01 = !this.B01, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleB02: function toogleB02() {
        this.B01 = false, this.B02 = !this.B02, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleB03: function toogleB03() {
        this.B01 = false, this.B02 = false, this.B03 = !this.B03, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleB04: function toogleB04() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = !this.B04, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1500,
          behavior: 'smooth'
        });
      },
      toogleB05: function toogleB05() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = !this.B05, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1400,
          behavior: 'smooth'
        });
      },
      toogleB06: function toogleB06() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = !this.B06, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1400,
          behavior: 'smooth'
        });
      },
      toogleB07: function toogleB07() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = !this.B07, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1400,
          behavior: 'smooth'
        });
      },
      toogleB08: function toogleB08() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = !this.B08, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 350,
          left: 1400,
          behavior: 'smooth'
        });
      },
      toogleB011: function toogleB011() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = !this.B011, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 654,
          left: 908,
          behavior: 'smooth'
        });
      },
      toogleB012: function toogleB012() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = !this.B012, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 654,
          left: 908,
          behavior: 'smooth'
        });
      },
      toogleB013: function toogleB013() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = !this.B013, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 654,
          left: 908,
          behavior: 'smooth'
        });
      },
      toogleB021: function toogleB021() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = !this.B021, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 654,
          left: 908,
          behavior: 'smooth'
        });
      },
      toogleB022: function toogleB022() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = !this.B022, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 654,
          left: 908,
          behavior: 'smooth'
        });
      },
      toogleB031: function toogleB031() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = !this.B031, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      },
      toogleB041: function toogleB041() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = !this.B041, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      },
      toogleB051: function toogleB051() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = !this.B051, this.B061 = false, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      },
      toogleB061: function toogleB061() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = !this.B061, this.B071 = false, this.B081 = false, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      },
      toogleB071: function toogleB071() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = !this.B071, this.B081 = false, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      },
      toogleB081: function toogleB081() {
        this.B01 = false, this.B02 = false, this.B03 = false, this.B04 = false, this.B05 = false, this.B06 = false, this.B07 = false, this.B08 = false, this.B011 = false, this.B012 = false, this.B013 = false, this.B021 = false, this.B022 = false, this.B031 = false, this.B041 = false, this.B051 = false, this.B061 = false, this.B071 = false, this.B081 = !this.B081, window.scrollTo({
          top: 945,
          left: 1166,
          behavior: 'smooth'
        });
      }
    };
  });
});
/******/ })()
;