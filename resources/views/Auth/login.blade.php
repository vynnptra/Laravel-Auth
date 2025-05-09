
@extends('layouts.auth')

@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    @method('POST')
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
        <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>
        <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Email</label>
            <input type="text" name="email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        <div>
            <label for="password" class="block mb-1 text-gray-600 font-semibold">Password</label>
            <input type="password" name="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        <p class=" -mt-3 text-sm text-gray-500">
            <a href="{{ route('forget.password.form') }}" class="text-blue-800 hover:text-blue-600">Forgot your password?</a>
        </p>
        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Login</button>
        
        <div class="flex items-center justify-center space-x-2 my-5">
            <span class="h-px w-16 bg-gray-100"></span>
            <span class="text-gray-300 font-normal">or</span>
            <span class="h-px w-16 bg-gray-100"></span>
        </div>
        <div class="flex justify-center gap-5 w-full ">
            
            <a href="{{ route('auth.redirection', 'google') }}" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-gray-300 hover:border-gray-900 hover:bg-gray-300 text-sm text-gray-500 hover:text-gray-100 p-3  rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500">
                <svg  class="w-4 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#EA4335" d="M5.266 9.765A7.077 7.077 0 0 1 12 4.909c1.69 0 3.218.6 4.418 1.582L19.91 3C17.782 1.145 15.055 0 12 0 7.27 0 3.198 2.698 1.24 6.65l4.026 3.115Z"/><path fill="#34A853" d="M16.04 18.013c-1.09.703-2.474 1.078-4.04 1.078a7.077 7.077 0 0 1-6.723-4.823l-4.04 3.067A11.965 11.965 0 0 0 12 24c2.933 0 5.735-1.043 7.834-3l-3.793-2.987Z"/><path fill="#4A90E2" d="M19.834 21c2.195-2.048 3.62-5.096 3.62-9 0-.71-.109-1.473-.272-2.182H12v4.637h6.436c-.317 1.559-1.17 2.766-2.395 3.558L19.834 21Z"/><path fill="#FBBC05" d="M5.277 14.268A7.12 7.12 0 0 1 4.909 12c0-.782.125-1.533.357-2.235L1.24 6.65A11.934 11.934 0 0 0 0 12c0 1.92.445 3.73 1.237 5.335l4.04-3.067Z"/></svg>
                <span>Google</span>
            </a>
            
            <a href="{{ route('auth.redirection', 'facebook') }}" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-gray-300 hover:border-gray-900 hover:bg-gray-300 text-sm text-gray-500 p-3 hover:text-gray-100   rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500 px-">
                <svg class="w-4 mr-2" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style>.st0{fill:#fff}.st1{fill:#f5bb41}.st2{fill:#2167d1}.st3{fill:#3d84f3}.st4{fill:#4ca853}.st5{fill:#398039}.st6{fill:#d74f3f}.st7{fill:#d43c89}.st8{fill:#b2005f}.st9{stroke:#000}.st10,.st11,.st9{fill:none;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st10{fill-rule:evenodd;clip-rule:evenodd;stroke:#000}.st11{stroke:#040404}.st11,.st12,.st13{fill-rule:evenodd;clip-rule:evenodd}.st13{fill:#040404}.st14{fill:url(#SVGID_1_)}.st15{fill:url(#SVGID_2_)}.st16{fill:url(#SVGID_3_)}.st17{fill:url(#SVGID_4_)}.st18{fill:url(#SVGID_5_)}.st19{fill:url(#SVGID_6_)}.st20{fill:url(#SVGID_7_)}.st21{fill:url(#SVGID_8_)}.st22{fill:url(#SVGID_9_)}.st23{fill:url(#SVGID_10_)}.st24{fill:url(#SVGID_11_)}.st25{fill:url(#SVGID_12_)}.st26{fill:url(#SVGID_13_)}.st27{fill:url(#SVGID_14_)}.st28{fill:url(#SVGID_15_)}.st29{fill:url(#SVGID_16_)}.st30{fill:url(#SVGID_17_)}.st31{fill:url(#SVGID_18_)}.st32{fill:url(#SVGID_19_)}.st33{fill:url(#SVGID_20_)}.st34{fill:url(#SVGID_21_)}.st35{fill:url(#SVGID_22_)}.st36{fill:url(#SVGID_23_)}.st37{fill:url(#SVGID_24_)}.st38{fill:url(#SVGID_25_)}.st39{fill:url(#SVGID_26_)}.st40{fill:url(#SVGID_27_)}.st41{fill:url(#SVGID_28_)}.st42{fill:url(#SVGID_29_)}.st43{fill:url(#SVGID_30_)}.st44{fill:url(#SVGID_31_)}.st45{fill:url(#SVGID_32_)}.st46{fill:url(#SVGID_33_)}.st47{fill:url(#SVGID_34_)}.st48{fill:url(#SVGID_35_)}.st49{fill:url(#SVGID_36_)}.st50{fill:url(#SVGID_37_)}.st51{fill:url(#SVGID_38_)}.st52{fill:url(#SVGID_39_)}.st53{fill:url(#SVGID_40_)}.st54{fill:url(#SVGID_41_)}.st55{fill:url(#SVGID_42_)}.st56{fill:url(#SVGID_43_)}.st57{fill:url(#SVGID_44_)}.st58{fill:url(#SVGID_45_)}.st59{fill:#040404}.st60{fill:url(#SVGID_46_)}.st61{fill:url(#SVGID_47_)}.st62{fill:url(#SVGID_48_)}.st63{fill:url(#SVGID_49_)}.st64{fill:url(#SVGID_50_)}.st65{fill:url(#SVGID_51_)}.st66{fill:url(#SVGID_52_)}.st67{fill:url(#SVGID_53_)}.st68{fill:url(#SVGID_54_)}.st69{fill:url(#SVGID_55_)}.st70{fill:url(#SVGID_56_)}.st71{fill:url(#SVGID_57_)}.st72{fill:url(#SVGID_58_)}.st73{fill:url(#SVGID_59_)}.st74{fill:url(#SVGID_60_)}.st75{fill:url(#SVGID_61_)}.st76{fill:url(#SVGID_62_)}.st77,.st78{fill:none;stroke-miterlimit:10}.st77{stroke:#000;stroke-width:3}.st78{stroke:#fff}.st79{fill:#4bc9ff}.st80{fill:#50d}.st81{fill:#ff3a00}.st82{fill:#e6162d}.st84{fill:#f93}.st85{fill:#b92b27}.st86{fill:#00aced}.st87{fill:#bd2125}.st89{fill:#6665d2}.st90{fill:#ce3056}.st91{fill:#5bb381}.st92{fill:#61c3ec}.st93{fill:#e4b34b}.st94{fill:#181ef2}.st95{fill:red}.st96{fill:#fe466c}.st97{fill:#fa4778}.st98{fill:#f70}.st99{fill-rule:evenodd;clip-rule:evenodd;fill:#1f6bf6}.st100{fill:#520094}.st101{fill:#4477e8}.st102{fill:#3d1d1c}.st103{fill:#ffe812}.st104{fill:#344356}.st105{fill:#00cc76}.st106{fill-rule:evenodd;clip-rule:evenodd;fill:#345e90}.st107{fill:#1f65d8}.st108{fill:#eb3587}.st109{fill-rule:evenodd;clip-rule:evenodd;fill:#603a88}.st110{fill:#e3ce99}.st111{fill:#783af9}.st112{fill:#ff515e}.st113{fill:#ff4906}.st114{fill:#503227}.st115{fill:#4c7bd9}.st116{fill:#69c9d0}.st117{fill:#1b92d1}.st118{fill:#eb4f4a}.st119{fill:#513728}.st120{fill:#f60}.st121{fill-rule:evenodd;clip-rule:evenodd;fill:#b61438}.st122{fill:#fffc00}.st123{fill:#141414}.st124{fill:#94d137}.st125,.st126{fill-rule:evenodd;clip-rule:evenodd;fill:#f1f1f1}.st126{fill:#66e066}.st127{fill:#2d8cff}.st128{fill:#f1a300}.st129{fill:#4ba2f2}.st130{fill:#1a5099}.st131{fill:#ee6060}.st132{fill-rule:evenodd;clip-rule:evenodd;fill:#f48120}.st133{fill:#222}.st134{fill:url(#SVGID_63_)}.st135{fill:#0077b5}.st136{fill:#fc0}.st137{fill:#eb3352}.st138{fill:#f9d265}.st139{fill:#f5b955}.st140{fill:#dd2a7b}.st141{fill:#66e066}.st142{fill:#eb4e00}.st143{fill:#ffc794}.st144{fill:#b5332a}.st145{fill:#4e85eb}.st146{fill:#58a45c}.st147{fill:#f2bc42}.st148{fill:#d85040}.st149{fill:#464eb8}.st150{fill:#7b83eb}</style><g id="Layer_1"/><g id="Layer_2"><path d="M50 2.5c-58.892 1.725-64.898 84.363-7.46 95h14.92c57.451-10.647 51.419-93.281-7.46-95z" style="fill:#1877f2"/><path d="M57.46 64.104h11.125l2.117-13.814H57.46v-8.965c0-3.779 1.85-7.463 7.781-7.463h6.021V22.101c-12.894-2.323-28.385-1.616-28.722 17.66V50.29H30.417v13.814H42.54V97.5h14.92V64.104z" style="fill:#f1f1f1"/></g></svg>
            <span>Facebook</span>
            </a>

            <a href="{{ route('auth.redirection', 'github') }}" class="w-full flex items-center justify-center mb-6 md:mb-0 border border-gray-300 hover:border-gray-900 hover:bg-gray-300 text-sm text-gray-500 p-3 hover:text-gray-100   rounded-lg tracking-wide font-medium  cursor-pointer transition ease-in duration-500 px-">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" x="0px" y="0px" style="enable-background:new 0 0 100 100" viewBox="0 0 100 100">
                    <circle cx="52" cy="52" r="44" opacity=".35"></circle><circle cx="50" cy="50" r="44" fill="#f2f2f2"></circle><path fill="#707cc0" d="M50,12.5c-20.711,0-37.5,16.789-37.5,37.5S29.289,87.5,50,87.5S87.5,70.711,87.5,50 S70.711,12.5,50,12.5z"></path><path fill="#f2f2f2" d="M60.161,83.936c0-1.122,0.042-4.813,0.042-9.389c0-3.192-1.095-5.281-2.324-6.338 c7.624-0.847,15.626-3.74,15.626-16.888c0-3.736-1.324-6.791-3.518-9.184c0.352-0.866,1.527-4.346-0.341-9.057 c0,0-2.868-0.92-9.402,3.508c-2.734-0.759-5.662-1.139-8.568-1.152c-2.91,0.013-5.838,0.393-8.568,1.152 c-6.538-4.429-9.411-3.508-9.411-3.508c-1.862,4.712-0.687,8.192-0.336,9.057c-2.189,2.393-3.523,5.448-3.523,9.184 c0,13.115,7.99,16.051,15.589,16.915c-0.978,0.856-1.862,2.364-2.173,4.575c-1.95,0.876-6.907,2.386-9.96-2.844 c0,0-1.808-3.285-5.242-3.527c0,0-3.342-0.043-0.235,2.08c0,0,2.244,1.053,3.8,5.006c0,0,2.009,6.656,11.529,4.588 c0.017,2.856,0.046,5.008,0.046,5.821c0,0.385-0.122,0.792-0.383,1.115C45.945,86.292,49.3,87,52.807,87 c2.981,0,5.853-0.509,8.576-1.417C60.502,85.37,60.161,84.613,60.161,83.936z"></path><path fill="#40396e" d="M50,89c-21.505,0-39-17.495-39-39s17.495-39,39-39s39,17.495,39,39S71.505,89,50,89z M50,14 c-19.851,0-36,16.149-36,36s16.149,36,36,36s36-16.149,36-36S69.851,14,50,14z"></path>
                </svg>
            <span>Github</span>
            </a>
            
        </div>
        <a href="{{ route('register.form') }}" class="text-sm font-light text-gray-500 dark:text-gray-400 ">Do not have an account? <span
            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign up here</span>
        </a>
    </div>
    </form>
@endsection