<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
  /* body{
    font-size: 1.25rem;
  } */
  .bcp {
    background: #524CBF;
  }

  .tcp {
    color: #524CBF;
  }

  .btnsignup:hover{
    background: #524CBF;
  }

  
  @media (max-width: 576px) {
    .headnav{
      display: block !important;
      margin: 0 !important;
    }
  }
  
</style>
</head>
<body>

  
  {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <p class="ps-lg-5">
        <a href="" class="ms-lg-5 ps-lg-5" style="">
          <svg width="221" height="42" viewBox="0 0 221 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <rect width="221" height="42" fill="url(#pattern0_2_3)"/>
          <defs>
          <pattern id="pattern0_2_3" patternContentUnits="objectBoundingBox" width="1" height="1">
          <use xlink:href="#image0_2_3" transform="scale(0.00452489 0.0238095)"/>
          </pattern>
          <image id="image0_2_3" width="221" height="42" xlink:href="data:image/png;base64,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"/>
          </defs>
          </svg>
        </a>
      </p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">        
        <div class="nav-item me-auto mx-auto text-center">
          <h5 class="p-4"><a class="nav-link" href="#">Features</a></h5>
          <h5 class="p-4"><a class="nav-link" href="#">Use Cases</a></h5>
          <h5 class="p-4"><a class="nav-link" href="#">Resources</a></h5>
          <h5 class="p-4"><a class="nav-link" href="#">Pricing</a></h5>
        </div>
        <div class="d-flex justify-content-center mx-auto" style="margin-right: 150px;">
          <h6><a href="#" class="nav-link tcp p-2 me-2">Sign In</a></h6>
          <h6 class="ms-4"><a href="#" class="nav-link btn btn bcp px-4 py-2 text-white">Sign Up</a></h6>
        </div>
      </div>
    </div>
    </div>
  </nav> --}}


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ps-lg-5 pe-lg-5" style="">
    <a href="" class="ms-lg-5 ps-lg-5">
      <svg width="221" height="42" viewBox="0 0 221 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <rect width="221" height="42" fill="url(#pattern0_2_3)"/>
      <defs>
      <pattern id="pattern0_2_3" patternContentUnits="objectBoundingBox" width="1" height="1">
      <use xlink:href="#image0_2_3" transform="scale(0.00452489 0.0238095)"/>
      </pattern>
      <image id="image0_2_3" width="221" height="42" xlink:href="data:image/png;base64,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"/>
      </defs>
      </svg>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="#"><p style="font-size:1rem;">Features</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h5>Use Cases</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><h5>Resources</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><h5>Pricing</h5></a>
        </li>
      </ul>
      <div class="d-lg-flex justify-content-center d-md-block  me-lg-5 pe-lg-5">
        <h6><a href="#" class="nav-link tcp p-2 me-2">Sign In</a></h6>
        <h6 class=""><a href="#" class="btn bcp px-4 py-2 btnsignup text-white">Sign Up</a></h6>
      </div>
    </div>
  </div>
</nav>

  {{-- <nav class="navbar bg-white shadow-sm">
    <div class="container-fluid headnav d-flex justify-content-between text-center" style="margin-left: 100px; margin-right: 100px;">
      <a>
        <svg width="221" height="42" viewBox="0 0 221 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="221" height="42" fill="url(#pattern0_2_3)"/>
        <defs>
        <pattern id="pattern0_2_3" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0_2_3" transform="scale(0.00452489 0.0238095)"/>
        </pattern>
        <image id="image0_2_3" width="221" height="42" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN0AAAAqCAYAAAA3U167AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8xOS8yMKAp40YAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAASpklEQVR4nO2de5RcRZnAf9/tTCSZWwXBREAWBGUVcFFBBXaD0hEWUdIJmQ4RF+MDIQEWWQElyIJH9ywoKmExrnjkcVgWEZFOAp0oiJgmsLKwUVCDQaOiPMISg5Bbt5kwydxv/7jdM7dv3+6ZTGbIY/t3Tp/u+1XVrbqPrx5ffVUtqspI6TmpYsXjImA6EAHlftWvLF02rTrik3bosIsjI1W6YqFyAnAF8DagqybeDDwKXFwq51eMSgk7dNjFGJHSFQuVBcCXh4j26VI5f82IStWhwy7MVindyYVKVw6uAz42zCTXbYGz7iznoxGVrkOHXRBvuBF7CpX9crCSZoV7HjgLOBvYkAo7cxys6Jle2Xvbitmhw67DsFq6YqHyHuB7wD6poIdB55TK054C6ClUDhT4PvDOVLyngDmlcv7hUShzhw47NUO2dMVC5QxgBc0Kd4tG+t66wgEsLuefVPQY4LZU3P2BlcXplbnbWuAOHXZ22rZ0xUJlIXB+RtAlpXL+S+1OXCxUPg98MSPoy6Vy/nNbVcoOHXYhMpWup1CZJPAd4AOpIAd8tFTOLx3OyYuFymzgJqA7FXQnkc4tLZ/mtr7IHTrs3DQpXbFQOYx4XPaWVNwngFNK5fzqrcmgWKi8HbgDOCgV9DjK7NKy/BNbV+QOHXZuGsZ0xUKlB/gpzQq3XOHorVU4gFI5/wuFo4AfpYLeivBQsVCZvrXn7NBhZ2agpSsWKhcDWeO0q0rl/GdGI7NioXINcF5G0AWlcv7q0cijQ4cdHVFVioXKXODmVNgWYH6pnL9xNDMsFirzgG8CuVTQqaVy/nujmVeHDjsiMuukFfuJ8CCxWb/OOuJ5tf8ai0x7CpVjJZ732ysh/oOqTl28bNr/jkWeHTrsKHgiXEqjwv0SOHKsFA5gcTl/P3AksCYhfqOIfHas8hwOxpgLjDF/NsY8Y4xZb4y5bHuWZ6QYY+43xjxXu451xpjDtneZOgziAe9PyS4qlfPPjnXGpXL+KeDilPjvxzrfdoiIFZHJIrKviEwBdt+e5RkpIrKXiOxdu459gPHbu0wdBvEAPyV78VXMP92VHPcq5t2hw3bBI158mqQrK+IYkVayka+o7dBhJ2HYqwzGCNnO+Xfo8Kqz1d25nkJlN4mX8tTHCU+VyvnbAIqFyqkMGmV6gWtL5fyWUSlphw67CCMZQ/lAciL7MQZXFSwA3lH7rcANxPN9HTp0qDESpVMgAGzt+KVEWPL3CyMtVBJr7SdTop8HQfBoUuD7/u6e5xUZ7K5Wge8FQaDW2tkkrJCqertzzhljDgcOFxEBng2C4G6ax5SvABhjThSRWcBfAf2qulpE7gyCYMj1gdbaY4AZwMHEDgFPA8uDICgbY44QkcMT0R8OgmC1tfYg4NhEmdc651bWynEK8TKrTcAqVf0P59xQ1uYXa/foH4ld8sYBz6jqnc65H7RL6Pv+HiLSIyLTgNcS74OzBrgrCIKfZlzvJKAnmXcQBIuNMVNF5CPAG4A+4OdRFN0UhuHA0jBjTEFEZgKvBzar6uPArc65tu6HxphDRKQIHE7sXF8FHlXVJc65x4dI+0ER+WCtXDlgI/BQFEVLwjB8ul3akbIzWAuvTx1fSbz5UZJ9iVvVOr3ETtv9wLeIXxYAVPVRa+08EZmfiP8IkKV01lp7vYg0KL6IFIDPWWtvi6Lo7DAMX0qlw/f9ySJyYy1umvnW2tuJK64TE/LLgNVAnnhbjDr3WGtniMiFqfPMEpHPGmPmOueWZeQDccUx0/O884ADUtcxz1pb6u/v/4dqtdqXTmiMmet53leA9Mr/GcACa+3S/v7++dVqdX0i7A00PrN1xpijROSi1Dlmep53obV2TrVavbe7u3tp+l6JyAzgYmvthUEQNLkJep6X833/KhE5l2YPpx4R+Rdr7bWbN28+v7e3t+H6fN/f1/O8W0Qknz4vcKrneVdYa78QBMHXMsK3ibE0pKgncUvRhqYHPQxezpD102iF/UuL36GIfB1IKhzEtRukDDsicjaQbmmTnOp53krf9/dMCmutyk9aKFydOSJyYkrWW/tuuG8ichyQVrg6e4hIyRhzcIvwcSKykJTCJSh6nrcoLTTGXCIiN9OscElOzuVy/22M2S8h60/F2TtD4epY4JaJEyfeB7S6VwIsNMackBROmDBhvO/79wD/RLPCJdOe09XVdbfv+wNzlcYY63nej4krt1Z0A1+11l7QJs6IGMuWzutX9u8pVF4m20oZSfsHOhb4IjI1Qz6x9p1u6Vo9zCSHeZ53HVCsCzzP+xYwml4gyee0AZicCh8vIpcCH8lIm7yGl4grWpuMICLzjDELnXO/ATDGnCwilw+zbAeKyJLddtvt6E2bNmWN35MVe1bZJ6damw3Ew4GGqSsRuYzESpWurq5vAcdl5Felef3mNM/zriHexwcR+TRxdz/JGuJK77BU3lcZY37tnLs7I68RMZYt3Z4CqwV+3+LzB+D2Mcx/KB4DflL71F3eWk1h3AScAExV1YtpbD0BeowxRwLUvk9Nhf9ZVRcAU4m7k98ZQXkfVtW3Afup6rtodKEDeF93d3crz5NIVc9T1QOiKDqgdg0NiMgHauWfKCJNLR9wo6p+XFU/C/w6FfbO8ePHn92m7L9X1aNqZT88Iz3ARlWdUYvzZuCeVPi7jTH71Mr4XuATqfCbVfXIKIreVMvjG6nws4wxb6/9Pj4VtiAIgkODIHinqh5K3MWHeJuSmar6P22ubasZy5ZOGGxBdiReVNVZzrn7M8KalE5VFzjnvpIQ/dQYs1hEHiDhsC0ipwGPiEh6t7RnVPUY59yfErJ7rLVrgH8dZplfVtU5zrm60eFnxph5IrIyUea9RGRf4MmM9Nc555KKdKW1Nk9iPKmqh9R+FogNRnX6VXW2c25gt4AJEyYs6urquou4IqpzDrCI5u4lqnqOc+6R2uFjxpgLROTuVJzLnXPl2uEffd8/0/O8tcBrarLXAAcCz4nIpxqT6qXOuSsSsueBT1lrNwBfqAtF5HTi7mhD5aSqU4wxk51zG5xzvzPGHC8ibwmCYGX6WkaD0Va61wwdpS27jUop2rOohcJlsSqlcAA459YaYy4VkaSx49217yNT0RekFA6AIAgut9bOId4heygeTSgcAKr6MxHZAEypiTwRMVmJVfWODHGFhNKJyB617xNS8a5NKhxAb2/vK77vz60pRb2rerAxZl8R2ZRK/4Kqpp3nH6OxG6gi8sNkhDAMn7bW/gE4JCGu98ySQ4QI2N9aew2NPbdIVSfFxukB3lP7/hOxFRcAEfkMcLa19lHgYeAHQRD8hDFitJVuHrAHI3fnyjKSjDaVrYhbbhWgqj8UkVcYrGgmT5gwYfeurq4piWjVKIrubXP+5QxD6VT1+bQsl8u9oqoN90tEWo1Bs6ZvwtRx/V14Y0qeucYxDMP11toVwMyE+E3Ew4Ykf6lWq+nnupnYWFRXui1RFKXLA/GePEn6fN/f0/O85Lgwl7JED5BSOIC9J06c6OVyuW+IyJxUWDdwDHCMiFxorX1KVa92zv1b1rm3hVFVupFs5zACshRaW8ibI6pujUN3evPcJCFxbV1XOk9EJtDYdXlZVXubUg4yYudyVRWG70aXFS8tq1t/G4YEqpoevyZ5LnXs0+zLS20uNPl8PJrtCVn2hawyTmDk/sG7i8gezrkHat3zK4FJLeLuLyJXG2Pe7Jw7Z4T5ZTKqStczfcXexDdlpC3d5sXLpg010Zv1ULMe4mjQygyPiLyexqU/m1V1I42t9STP815Hc6tS583DLEcrpRlNpasfN1QEInIA2YYPgLemjjfQ/E6JZDQ5GXkPp4z1yetNDA5FeomVP+td3kLsyGGIFfUlau+Pc+463/dLnuedBpwCHEpiPjdR+LOstWuCIFgEA/sIHUfcC3ot8fYjzyqcv7icHxhGFAuVY4k9tPYErgX+CMyhRUFHjIjcAkwjQzGGyRqau1t9NLYer8vId3+27QVsxezu7u5LqtVqk9KIyFk0muPX9fb29lprnyPuZkF8f+fRvG6Q7u7uSblcbmZavh2p35fHaVxj+SmgyWvFGHO0iPxdQtSnqr8VkfSUwGjSFYZhaK19hsHd5cL+/v4jqtXqRmsHZ0KCIMD3/Sme550bRdHCMAw3Tpo0iSAIkufbEkXR4jAMF/m+b0TkLSLyfmKj0OtrcYRYseqGqGNq4TOJnTLqkQ4uTq8cV1qWf65YqHwCWEg81IJ4/PgUNb/k0W4dumrnHDfCT1O3QVV/mxLNmDhxYtpg085cvS3sk8vlbuvu7m5Yc2iMmU/zBkv1gXeDkUZELjLGNFg0fd/fPZfL3c6gEWRHQABU9c6U/ERr7de6uroGKmhjzLtE5Ps0VjoP1TxzttWY1o56GX6ckE3J5XLXQqxo9Y+IeLVJ/897nrfKGFPYsmWLdHd354wxf2OMWeh53h89z1vt+/5eYRg659yqIAguJ54iGkBVkz2aeoMySZWiKu8jdu07BOG0numVKcCNxAp3A/H87VUkdmcYbUNKsoXrJZ6PaufwvDdwcov0AIjIUuKmv15BHDBu3Lj7rLVfJR5TfTJ1jtHmpFwu97i19i7irko+VcMD9EVRdDOAqt4gIgsYvLciIjdZa08HHiTuctb9C3c4nHMrrbUPEtfodS6cMGHCTGvtKuC1InI8qR6DqtZ3khvz5WJRFH3d87x5ibw+bK09RFVvBX4HHGiM+TiDDgoHichdqnqI53mbReRXyfN5nveQMWahiKxW1cPThpm0ZbXGbYuX5RcDFAuVW4m7kq8TGfCsWVoq58+o/V5cLFQscCZkK91oLSR1pXL+zHYRioXKoQyhMFEULfI8bw6N45+pNJqNx5r9gXPbhF9Sd451zj1Zm05I/3/fe2ufHR5VPVNEVtHo2XEQzRsG17neOZeezB4zwjBcY629lPhPSeu8Q0Te0SoNcJNz7onu7m7J5XL30rg1yIF1h4CM4efaKIr+OeN8yX5qfW5yPPEYDuJuepIBf+EsA8TmNgXfGrxioTLU5Hgry9EAYRiuV9Wsi06ygUZ/xeQ1bc0YLh23yVSfwdeCILgqKXDOXamqC4eRNm39a1XW0ZK3YyCNc+4JVS3QuGokE1W9va+vL9NkP0RZvBa/h5OWIAi+BAzXnH9HX1/fmQDValWjKJpLvGP5UCgw7/35ZVuK0yv79Ey/fzyDCpZVfo9BZTutWKjsD9AzvTKJeA3qQKS0WbxVbQZAJBLwKm+r4Jy7A5gL/IZGj4de4LtRFJ1EPBf1UuJTL+PGlLzJYyJ1voG4qvp14MPEc0/JdH3Ey2qKQRBk7mDmnLsQmA2sotGxewvxg/mAqt6YKlt9YrkvJc+yfmqba0vLs7r4r7TLwzm3IoqiI4D/BP6cStsH/AqY55z70KZNm5LDgv7UeTfS/L5ExFbSepy/kP1cgnbXEQTB+cRjpocYdBZPXt8vgflBEJyS9AsNw/D5KIqOBq4hHo+l708v8VAgHwRBBeE5hHUi+jEGneOT49m60k2K+rmH2CB4APCbYqHyoAhPkzAQjiOe/LyMwVrl6mKhshvxrH1TTePFHgiv+pKgIAhu8X3/RyIyT0SOAF5R1WXOue8AWGtnMfhw+xgcH36CRk+X37XJ5mbgvsTxs0EQrPN9/wEROUNE3l4798r+/v4bqtVq21UUQRCUuru7l3ued7qIHAuMU9VHVPXbYRi+aIxZAyQNF/X1Wz+m0cUqaz6vHziNRstu/do+SeM1r81Iv5TGJVJNeYRh+CTwUd/3j/I871RiN6yXgQeiKLolDMOsP4B5MlX2TTSP1QNgFoPvkdLc6kPcpU92cZtapyAIFovIEt/3P1TzpplMrBgroyj6bhiGmdM1YRhuBD7t+/41IjK79k5NJHYTvLf+XtWo35vNxJXTCzRO3LuarLrkB/lo1vTKUZ5wNXFDMZV46dha4ufFuEj1Kk/kZAY1cS9i60sm23NTkzAM19PCXzEIgkdayH+VJW8Rdx3xRrvpfJ8l+2+/hqRarW4i3tH6m+mwmntYlovYCwyxCLhm+v5Fi7AhrzkIgvXA+qHiAYRh+DCxe9SQBEHQC7R1EHbObaF5TWTWuVrNDzag8X8D3Ebz/yIOSa1i+eoQ0erTVP3EKvBNGiuSK4Av12UeTFZYtrlP548bJ11Lluc3FQuVusvg0+OWLJsWFAuV89g696gOHf7fkNrnR0m13KVyPqrLeqZX/lqE3wowfrzcCNxXLFT+FjgDUIWLvVqi+4mdX39J+zFPhw4d2rBFZS3x1MCzwOnE02bnEnep5y8u528dsMCUyvl7NOJ44Ns0D5w7dOgwDO5afiylcv56lGOBfyfult8BzCiV89cB/B8NhpVNam/vvwAAAABJRU5ErkJggg=="/>
        </defs>
        </svg>
      </a>
      <div class="nav-item d-flex text-center">
        <h5 class="p-4"><a class="nav-link" href="#">Features</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Use Cases</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Resources</a></h5>
        <h5 class="p-4"><a class="nav-link" href="#">Pricing</a></h5>
      </div>
      <div class="d-flex justify-content-center">
        <h6><a href="#" class="nav-link tcp p-2">Sign In</a></h6>
        <h6 class="ms-4"><a href="#" class="nav-link btn btn bcp px-4 py-2 text-white">Sign Up</a></h6>
      </div>
    </div>
  </nav> --}}
    
  <section class="container-fluid mp">
    @yield('content')
  </section>

  
  <section class="container-fluid mp">
    @yield('footer')
  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @yield('script')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>