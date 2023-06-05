@section('navbar')
<nav class="navbar sticky-top border" style="background-color: white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <svg width="170" height="32" viewBox="0 0 181 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M69.6143 26.8672C69.8428 27.1465 69.957 27.4766 69.957 27.8574C69.957 28.2129 69.8301 28.5176 69.5762 28.7715C69.3223 29.0254 68.9795 29.1523 68.5479 29.1523C68.1162 29.1523 67.748 28.9746 67.4434 28.6191L59.4072 18.3359L55.8652 21.916V27.7432C55.8652 28.124 55.7256 28.4541 55.4463 28.7334C55.167 29.0127 54.8242 29.1523 54.418 29.1523C54.0371 29.1523 53.707 29.0127 53.4277 28.7334C53.1484 28.4541 53.0088 28.124 53.0088 27.7432V8.50977C53.0088 8.12891 53.1484 7.79883 53.4277 7.51953C53.707 7.21484 54.0371 7.0625 54.418 7.0625C54.7988 7.0625 55.1289 7.20215 55.4082 7.48145C55.7129 7.76074 55.8652 8.10352 55.8652 8.50977V18.4121L66.5293 7.5957C66.7832 7.26563 67.1133 7.10059 67.5195 7.10059C67.9512 7.0752 68.2939 7.18945 68.5479 7.44336C68.8018 7.67188 68.9287 7.98926 68.9287 8.39551C68.9287 8.77637 68.8018 9.06836 68.5479 9.27148L61.3496 16.4316L69.6143 26.8672ZM72.326 22.0684C72.5037 23.4648 73.0369 24.582 73.9256 25.4199C74.8396 26.2324 76.0838 26.6387 77.658 26.6387C79.2576 26.6387 80.616 26.3848 81.7332 25.877C82.0887 25.6992 82.4061 25.6104 82.6854 25.6104C82.9646 25.585 83.2186 25.6865 83.4471 25.915C83.701 26.1436 83.8279 26.3975 83.8279 26.6768C83.8279 27.2354 83.5994 27.6289 83.1424 27.8574C82.7107 28.0859 82.3172 28.2891 81.9617 28.4668C81.6063 28.6445 81.2254 28.7969 80.8191 28.9238C79.8797 29.1777 78.7879 29.3047 77.5438 29.3047C74.9793 29.3047 72.9861 28.5938 71.5643 27.1719C70.1678 25.7246 69.4695 23.6807 69.4695 21.04C69.4695 18.7549 70.0662 16.8506 71.2596 15.3271C72.6053 13.626 74.4969 12.7754 76.9344 12.7754C79.2703 12.7754 81.1111 13.5625 82.4568 15.1367C83.7264 16.6094 84.3611 18.4502 84.3611 20.6592C84.3611 21.04 84.2215 21.3701 83.9422 21.6494C83.6883 21.9287 83.3582 22.0684 82.952 22.0684H72.326ZM76.9344 15.1748C75.0809 15.1748 73.7352 16 72.8973 17.6504C72.5926 18.2344 72.4021 18.9326 72.326 19.7451H81.5428C81.4666 18.2725 80.9207 17.1045 79.9051 16.2412C79.0926 15.5303 78.1023 15.1748 76.9344 15.1748ZM85.4732 7.48145C85.4732 7.0752 85.6129 6.74512 85.8922 6.49121C86.1715 6.21191 86.5143 6.07227 86.9205 6.07227C87.3268 6.07227 87.6568 6.21191 87.9107 6.49121C88.19 6.74512 88.3297 7.0752 88.3297 7.48145V27.7432C88.3297 28.124 88.19 28.4541 87.9107 28.7334C87.6568 29.0127 87.3268 29.1523 86.9205 29.1523C86.5143 29.1523 86.1715 29.0127 85.8922 28.7334C85.6129 28.4541 85.4732 28.124 85.4732 27.7432V7.48145ZM97.5541 12.7754C99.9662 12.7754 101.909 13.5371 103.381 15.0605C104.854 16.6094 105.565 18.6025 105.514 21.04C105.514 23.5029 104.803 25.4961 103.381 27.0195C101.909 28.543 99.9662 29.3047 97.5541 29.3047C95.1166 29.3047 93.1869 28.543 91.765 27.0195C90.2924 25.4961 89.5561 23.5029 89.5561 21.04C89.5561 18.5518 90.2924 16.5586 91.765 15.0605C93.1869 13.5371 95.1166 12.7754 97.5541 12.7754ZM94.0502 25.458C94.558 25.8896 95.1166 26.207 95.726 26.4102C96.3607 26.6133 96.9701 26.7148 97.5541 26.7148C98.1381 26.7148 98.7348 26.6133 99.3441 26.4102C99.9535 26.207 100.512 25.877 101.02 25.4199C102.137 24.4043 102.696 22.9316 102.696 21.002C102.696 19.123 102.137 17.6631 101.02 16.6221C100.08 15.7588 98.9252 15.3398 97.5541 15.3652C95.2943 15.3652 93.7328 16.3809 92.8695 18.4121C92.5648 19.1484 92.4125 20.0244 92.4125 21.04C92.4125 22.0557 92.5648 22.9316 92.8695 23.668C93.1742 24.4043 93.5678 25.001 94.0502 25.458ZM114.51 15.4033C112.682 15.4033 110.968 16.4062 109.368 18.4121V27.7432C109.368 28.124 109.229 28.4541 108.949 28.7334C108.67 29.0127 108.34 29.1523 107.959 29.1523C107.578 29.1523 107.248 29.0127 106.969 28.7334C106.69 28.4541 106.55 28.124 106.55 27.7432V14.375C106.55 13.9688 106.677 13.626 106.931 13.3467C107.21 13.0674 107.553 12.9277 107.959 12.9277C108.34 12.9277 108.67 13.0674 108.949 13.3467C109.229 13.6006 109.368 13.9434 109.368 14.375V15.6699C110.206 14.8066 110.93 14.1846 111.539 13.8037C112.707 13.1182 113.824 12.7754 114.891 12.7754C115.983 12.7754 116.871 12.9404 117.557 13.2705C118.242 13.5752 118.826 14.0195 119.309 14.6035C120.274 15.7461 120.756 17.168 120.756 18.8691V27.7432C120.756 28.124 120.616 28.4541 120.337 28.7334C120.058 29.0127 119.728 29.1523 119.347 29.1523C118.966 29.1523 118.636 29.0127 118.357 28.7334C118.077 28.4541 117.938 28.124 117.938 27.7432V19.1738C117.938 18.0059 117.671 17.0918 117.138 16.4316C116.605 15.7461 115.729 15.4033 114.51 15.4033ZM128.381 26.791C128.939 26.791 129.333 26.7529 129.562 26.6768C129.815 26.5752 130.082 26.5244 130.361 26.5244C130.641 26.5244 130.895 26.6387 131.123 26.8672C131.352 27.0703 131.466 27.3877 131.466 27.8193C131.466 28.2256 131.263 28.5176 130.856 28.6953C129.968 29.1016 129.206 29.3047 128.571 29.3047C127.937 29.3047 127.353 29.2666 126.819 29.1904C126.312 29.1396 125.816 28.9746 125.334 28.6953C124.191 28.0352 123.62 26.8672 123.62 25.1914V15.5176H121.411C121.03 15.5176 120.827 15.3145 120.802 14.9082C120.802 14.7305 120.903 14.5654 121.106 14.4131L125.334 10.2617C125.512 10.084 125.689 9.99512 125.867 9.99512C126.045 9.96973 126.185 10.0205 126.286 10.1475C126.388 10.2744 126.438 10.4268 126.438 10.6045V13.0801H129.98C130.336 13.0801 130.628 13.1943 130.856 13.4229C131.085 13.6514 131.199 13.9434 131.199 14.2988C131.199 14.6543 131.085 14.9463 130.856 15.1748C130.628 15.4033 130.336 15.5176 129.98 15.5176H126.438V24.9629C126.438 25.75 126.68 26.2832 127.162 26.5625C127.416 26.7148 127.822 26.791 128.381 26.791ZM138.634 12.7754C141.046 12.7754 142.988 13.5371 144.461 15.0605C145.933 16.6094 146.644 18.6025 146.594 21.04C146.594 23.5029 145.883 25.4961 144.461 27.0195C142.988 28.543 141.046 29.3047 138.634 29.3047C136.196 29.3047 134.266 28.543 132.845 27.0195C131.372 25.4961 130.636 23.5029 130.636 21.04C130.636 18.5518 131.372 16.5586 132.845 15.0605C134.266 13.5371 136.196 12.7754 138.634 12.7754ZM135.13 25.458C135.637 25.8896 136.196 26.207 136.805 26.4102C137.44 26.6133 138.05 26.7148 138.634 26.7148C139.218 26.7148 139.814 26.6133 140.424 26.4102C141.033 26.207 141.592 25.877 142.099 25.4199C143.217 24.4043 143.775 22.9316 143.775 21.002C143.775 19.123 143.217 17.6631 142.099 16.6221C141.16 15.7588 140.005 15.3398 138.634 15.3652C136.374 15.3652 134.812 16.3809 133.949 18.4121C133.644 19.1484 133.492 20.0244 133.492 21.04C133.492 22.0557 133.644 22.9316 133.949 23.668C134.254 24.4043 134.647 25.001 135.13 25.458ZM155.589 15.4033C153.761 15.4033 152.047 16.4062 150.448 18.4121V27.7432C150.448 28.124 150.308 28.4541 150.029 28.7334C149.75 29.0127 149.42 29.1523 149.039 29.1523C148.658 29.1523 148.328 29.0127 148.048 28.7334C147.769 28.4541 147.629 28.124 147.629 27.7432V14.375C147.629 13.9688 147.756 13.626 148.01 13.3467C148.29 13.0674 148.632 12.9277 149.039 12.9277C149.42 12.9277 149.75 13.0674 150.029 13.3467C150.308 13.6006 150.448 13.9434 150.448 14.375V15.6699C151.286 14.8066 152.009 14.1846 152.619 13.8037C153.787 13.1182 154.904 12.7754 155.97 12.7754C157.062 12.7754 157.951 12.9404 158.636 13.2705C159.322 13.5752 159.906 14.0195 160.388 14.6035C161.353 15.7461 161.836 17.168 161.836 18.8691V27.7432C161.836 28.124 161.696 28.4541 161.417 28.7334C161.137 29.0127 160.807 29.1523 160.426 29.1523C160.046 29.1523 159.715 29.0127 159.436 28.7334C159.157 28.4541 159.017 28.124 159.017 27.7432V19.1738C159.017 18.0059 158.751 17.0918 158.217 16.4316C157.684 15.7461 156.808 15.4033 155.589 15.4033ZM175.592 15.1367V14.375C175.592 13.9941 175.719 13.6641 175.973 13.3848C176.252 13.0801 176.582 12.9277 176.963 12.9277C177.344 12.9277 177.674 13.0674 177.954 13.3467C178.258 13.626 178.411 13.9688 178.411 14.375V28.3145C178.411 30.9551 177.776 32.9736 176.506 34.3701C175.237 35.792 173.434 36.5029 171.098 36.5029C168.61 36.5029 166.375 35.957 164.395 34.8652C164.039 34.6367 163.862 34.3193 163.862 33.9131C163.862 33.5068 163.976 33.1641 164.204 32.8848C164.458 32.6309 164.712 32.5039 164.966 32.5039C165.22 32.5039 165.449 32.542 165.652 32.6182C167.226 33.4053 168.94 33.7988 170.793 33.7988C173.993 33.7988 175.592 32.1104 175.592 28.7334V26.6387C174.12 28.2129 172.342 29 170.26 29C168.28 29 166.579 28.3271 165.157 26.9814C163.506 25.458 162.681 23.4268 162.681 20.8877C162.681 18.3232 163.506 16.2793 165.157 14.7559C166.579 13.4102 168.305 12.75 170.336 12.7754C172.368 12.7754 174.12 13.5625 175.592 15.1367ZM175.592 17.6504C175.008 17.041 174.335 16.5078 173.574 16.0508C172.837 15.5938 172.012 15.3652 171.098 15.3652C170.184 15.3652 169.397 15.4795 168.737 15.708C168.102 15.9365 167.543 16.2793 167.061 16.7363C166.045 17.7012 165.537 19.085 165.537 20.8877C165.537 23.5791 166.604 25.3057 168.737 26.0674C169.397 26.2959 170.184 26.4102 171.098 26.4102C172.621 26.4102 174.12 25.6357 175.592 24.0869V17.6504Z" fill="#414141"/>
            <path d="M7.96064 6.22222H36.7172C39.6383 6.22222 41.7008 9.0456 40.7771 11.7796L37.2108 22.3353C36.6284 24.0592 34.993 25.2222 33.1511 25.2222H10.7117M7.96064 6.22222L7.8742 5.62512C7.57301 3.54504 5.76743 2 3.63776 2H2M7.96064 6.22222L10.7117 25.2222M10.7117 25.2222L11.1039 27.9304C11.405 30.0104 13.2106 31.5556 15.3403 31.5556H34.0958M34.0958 31.5556C31.7323 31.5556 29.8164 33.4458 29.8164 35.7778C29.8164 38.1097 31.7323 40 34.0958 40C36.4594 40 38.3753 38.1097 38.3753 35.7778C38.3753 33.4458 36.4594 31.5556 34.0958 31.5556ZM21.2575 35.7778C21.2575 38.1097 19.3416 40 16.978 40C14.6146 40 12.6986 38.1097 12.6986 35.7778C12.6986 33.4458 14.6146 31.5556 16.978 31.5556C19.3416 31.5556 21.2575 33.4458 21.2575 35.7778Z" stroke="#68B984" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            
      </a>
      </button>
      <form class="d-flex ms-auto me-5" method="POST" action="{{ route('search') }}">
        @csrf
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn d-flex justify-content-center align-center" type="submit" style="background-color: #68B984;">
            <svg width="20" height="20" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.4 20.4L26 26" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M23.6 12.8C23.6 18.7647 18.7647 23.6 12.8 23.6C6.83532 23.6 2 18.7647 2 12.8C2 6.83532 6.83532 2 12.8 2C18.7647 2 23.6 6.83532 23.6 12.8Z" stroke="white" stroke-width="3"/>
            </svg>
        </button>
    </form>
    <div class="d-flex me-3">
      <a href="/admin/products" class="link-underline link-underline-opacity-0 link-dark"><p class="my-auto mx-auto">Admin</p></a>
    </div>
  </nav>
  @endsection