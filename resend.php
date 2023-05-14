<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">

    <style>
    * {
        font-family: "Josefin Sans", sans-serif;
    }

    .container {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .container .btn {
        position: relative;
        top: 0;
        left: 0;
        width: 250px;
        height: 50px;
        margin: 10px 2px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container .btn a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        padding: 10px;
        letter-spacing: 1px;
        text-decoration: none;
        overflow: hidden;
        color: #fff;
        font-weight: 400px;
        z-index: 1;
        transition: 0.5s;
        backdrop-filter: blur(15px);
    }

    .container .btn:hover a {
        letter-spacing: 3px;
    }

    .container .btn a::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
        transform: skewX(45deg) translate(0);
        transition: 0.5s;
        filter: blur(0px);
    }

    .container .btn:hover a::before {
        transform: skewX(45deg) translate(200px);
    }

    .container .btn::before {
        content: "";
        position: absolute;
        left: 50%;
        transform: translatex(-50%);
        bottom: -5px;
        width: 30px;
        height: 10px;
        background: #f00;
        border-radius: 10px;
        transition: 0.5s;
        transition-delay: 0.5;
    }

    .container .btn:hover::before

    /*lightup button*/
        {
        bottom: 0;
        height: 50%;
        width: 80%;
        border-radius: 30px;
    }

    .container .btn::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translatex(-50%);
        top: -5px;
        width: 30px;
        height: 10px;
        background: #f00;
        border-radius: 10px;
        transition: 0.5s;
        transition-delay: 0.5;
    }

    .container .btn:hover::after

    /*lightup button*/
        {
        top: 0;
        height: 50%;
        width: 80%;
        border-radius: 30px;
    }

    .container .btn:nth-child(1)::before,
    /*chnage 1*/
    .container .btn:nth-child(1)::after {
        background: #ff1f71;
        box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71,
            0 0 60px #ff1f71;
    }

    .container .btn:nth-child(2)::before,
    /* 2*/
    .container .btn:nth-child(2)::after {
        background: #2db2ff;
        box-shadow: 0 0 5px #2db2ff, 0 0 15px #2db2ff, 0 0 30px #2db2ff,
            0 0 60px #2db2ff;
    }

    .container .btn:nth-child(3)::before,
    /* 3*/
    .container .btn:nth-child(3)::after {
        background: #1eff45;
        box-shadow: 0 0 5px #1eff45, 0 0 15px #1eff45, 0 0 30px #1eff45,
            0 0 60px #1eff45;
    }

    body {
        margin: 0;
        height: 100vh;
        font-weight: 100;
        background: radial-gradient(#a23982, #1f1013);
        -webkit-overflow-Y: hidden;
        -moz-overflow-Y: hidden;
        -o-overflow-Y: hidden;
        overflow-y: hidden;
        -webkit-animation: fadeIn 1 1s ease-out;
        -moz-animation: fadeIn 1 1s ease-out;
        -o-animation: fadeIn 1 1s ease-out;
        animation: fadeIn 1 1s ease-out;
        color: "white";
    }

    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: tomato;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 75%;
        top: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 4.5s;
        animation: fadein 0.5s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }

    /* ! tailwindcss v3.1.8 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb;
    }

    ::after,
    ::before {
        --tw-content: "";
    }

    html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        tab-size: 4;
        font-family: Inter, sans-serif;
    }

    body {
        margin: 0;
        line-height: inherit;
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px;
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
    }

    a {
        color: inherit;
        text-decoration: inherit;
    }

    b,
    strong {
        font-weight: bolder;
    }

    code,
    kbd,
    pre,
    samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
            "Liberation Mono", "Courier New", monospace;
        font-size: 1em;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0;
    }

    button,
    select {
        text-transform: none;
    }

    [type="button"],
    [type="reset"],
    [type="submit"],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
    }

    :-moz-focusring {
        outline: auto;
    }

    :-moz-ui-invalid {
        box-shadow: none;
    }

    progress {
        vertical-align: baseline;
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto;
    }

    [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
    }

    summary {
        display: list-item;
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
        margin: 0;
    }

    fieldset {
        margin: 0;
        padding: 0;
    }

    legend {
        padding: 0;
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    textarea {
        resize: vertical;
    }

    input::placeholder,
    textarea::placeholder {
        opacity: 1;
        color: #9ca3af;
    }

    [role="button"],
    button {
        cursor: pointer;
    }

    :disabled {
        cursor: default;
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
        display: block;
        vertical-align: middle;
    }

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    *,
    ::before,
    ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    ::-webkit-backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    .absolute {
        position: absolute;
    }

    .relative {
        position: relative;
    }

    .right-0 {
        right: 0px;
    }

    .mx-5 {
        margin-left: 1.25rem;
        margin-right: 1.25rem;
    }

    .my-10 {
        margin-top: 2.5rem;
        margin-bottom: 2.5rem;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .block {
        display: block;
    }

    .flex {
        display: flex;
    }

    .hidden {
        display: none;
    }

    .h-full {
        height: 100%;
    }

    .w-full {
        width: 100%;
    }

    .w-\[640px\] {
        width: 640px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .items-center {
        align-items: center;
    }

    .justify-center {
        justify-content: center;
    }

    .border-2 {
        border-width: 2px;
    }

    .border-solid {
        border-style: solid;
    }

    .border-black {
        --tw-border-opacity: 1;
        border-color: rgb(0 0 0 / var(--tw-border-opacity));
    }

    .bg-transparent {
        background-color: transparent;
    }

    .bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity));
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
    }

    .pl-5 {
        padding-left: 1.25rem;
    }

    .pr-20 {
        padding-right: 5rem;
    }

    .text-center {
        text-align: center;
    }

    .font-sans {
        font-family: Inter, sans-serif;
    }

    .font-serif {
        font-family: Playfair Display, serif;
    }

    .text-5xl {
        font-size: 3rem;
        line-height: 1;
    }

    .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .placeholder\:text-black\/50::placeholder {
        color: rgb(0 0 0 / 0.5);
    }

    .hover\:bg-black\/80:hover {
        background-color: rgb(0 0 0 / 0.8);
    }

    * {
        color: "white";
    }

    .light {
        position: absolute;
        width: 0px;
        opacity: .75;
        background-color: white;
        box-shadow: #e9f1f1 0px 0px 20px 2px;
        opacity: 0;
        top: 100vh;
        bottom: 0px;
        left: 0px;
        right: 0px;
        margin: auto;
    }

    .x1 {
        -webkit-animation: floatUp 4s infinite linear;
        -moz-animation: floatUp 4s infinite linear;
        -o-animation: floatUp 4s infinite linear;
        animation: floatUp 4s infinite linear;
        -webkit-transform: scale(1.0);
        -moz-transform: scale(1.0);
        -o-transform: scale(1.0);
        transform: scale(1.0);
    }

    .x2 {
        -webkit-animation: floatUp 7s infinite linear;
        -moz-animation: floatUp 7s infinite linear;
        -o-animation: floatUp 7s infinite linear;
        animation: floatUp 7s infinite linear;
        -webkit-transform: scale(1.6);
        -moz-transform: scale(1.6);
        -o-transform: scale(1.6);
        transform: scale(1.6);
        left: 15%;
    }

    .x3 {
        -webkit-animation: floatUp 2.5s infinite linear;
        -moz-animation: floatUp 2.5s infinite linear;
        -o-animation: floatUp 2.5s infinite linear;
        animation: floatUp 2.5s infinite linear;
        -webkit-transform: scale(.5);
        -moz-transform: scale(.5);
        -o-transform: scale(.5);
        transform: scale(.5);
        left: -15%;
    }

    .x4 {
        -webkit-animation: floatUp 4.5s infinite linear;
        -moz-animation: floatUp 4.5s infinite linear;
        -o-animation: floatUp 4.5s infinite linear;
        animation: floatUp 4.5s infinite linear;
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
        left: -34%;
    }

    .x5 {
        -webkit-animation: floatUp 8s infinite linear;
        -moz-animation: floatUp 8s infinite linear;
        -o-animation: floatUp 8s infinite linear;
        animation: floatUp 8s infinite linear;
        -webkit-transform: scale(2.2);
        -moz-transform: scale(2.2);
        -o-transform: scale(2.2);
        transform: scale(2.2);
        left: -57%;
    }

    .x6 {
        -webkit-animation: floatUp 3s infinite linear;
        -moz-animation: floatUp 3s infinite linear;
        -o-animation: floatUp 3s infinite linear;
        animation: floatUp 3s infinite linear;
        -webkit-transform: scale(.8);
        -moz-transform: scale(.8);
        -o-transform: scale(.8);
        transform: scale(.8);
        left: -81%;
    }

    .x7 {
        -webkit-animation: floatUp 5.3s infinite linear;
        -moz-animation: floatUp 5.3s infinite linear;
        -o-animation: floatUp 5.3s infinite linear;
        animation: floatUp 5.3s infinite linear;
        -webkit-transform: scale(3.2);
        -moz-transform: scale(3.2);
        -o-transform: scale(3.2);
        transform: scale(3.2);
        left: 37%;
    }

    .x8 {
        -webkit-animation: floatUp 4.7s infinite linear;
        -moz-animation: floatUp 4.7s infinite linear;
        -o-animation: floatUp 4.7s infinite linear;
        animation: floatUp 4.7s infinite linear;
        -webkit-transform: scale(1.7);
        -moz-transform: scale(1.7);
        -o-transform: scale(1.7);
        transform: scale(1.7);
        left: 62%;
    }

    .x9 {
        -webkit-animation: floatUp 4.1s infinite linear;
        -moz-animation: floatUp 4.1s infinite linear;
        -o-animation: floatUp 4.1s infinite linear;
        animation: floatUp 4.1s infinite linear;
        -webkit-transform: scale(0.9);
        -moz-transform: scale(0.9);
        -o-transform: scale(0.9);
        transform: scale(0.9);
        left: 85%;
    }

    button:focus {
        outline: none;
    }

    @-webkit-keyframes floatUp {
        0% {
            top: 100vh;
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        50% {
            top: 0vh;
            opacity: .8;
        }

        75% {
            opacity: 1;
        }

        100% {
            top: -100vh;
            opacity: 0;
        }
    }

    @-moz-keyframes floatUp {
        0% {
            top: 100vh;
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        50% {
            top: 0vh;
            opacity: .8;
        }

        75% {
            opacity: 1;
        }

        100% {
            top: -100vh;
            opacity: 0;
        }
    }

    @-o-keyframes floatUp {
        0% {
            top: 100vh;
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        50% {
            top: 0vh;
            opacity: .8;
        }

        75% {
            opacity: 1;
        }

        100% {
            top: -100vh;
            opacity: 0;
        }
    }

    @keyframes floatUp {
        0% {
            top: 100vh;
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        50% {
            top: 0vh;
            opacity: .8;
        }

        75% {
            opacity: 1;
        }

        100% {
            top: -100vh;
            opacity: 0;
        }
    }

    .header {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Roboto', sans-serif;
        font-weight: 200;
        color: white;
        font-size: 2em;
    }

    #head1,
    #head2,
    #head3,
    #head4,
    #head5 {
        opacity: 0;
    }

    #head1 {
        -webkit-animation: fadeOut 1 5s ease-in;
        -moz-animation: fadeOut 1 5s ease-in;
        -o-animation: fadeOut 1 5s ease-in;
        animation: fadeOut 1 5s ease-in;
    }

    #head2 {
        -webkit-animation: fadeOut 1 5s ease-in;
        -moz-animation: fadeOut 1 5s ease-in;
        -o-animation: fadeOut 1 5s ease-in;
        animation: fadeOut 1 5s ease-in;
        -webkit-animation-delay: 6s;
        -moz-animation-delay: 6s;
        -o-animation-delay: 6s;
        animation-delay: 6s;
    }

    #head3 {
        -webkit-animation: fadeOut 1 5s ease-in;
        -moz-animation: fadeOut 1 5s ease-in;
        -o-animation: fadeOut 1 5s ease-in;
        animation: fadeOut 1 5s ease-in;
        -webkit-animation-delay: 12s;
        -moz-animation-delay: 12s;
        -o-animation-delay: 12s;
        animation-delay: 12s;
    }

    #head4 {
        -webkit-animation: fadeOut 1 5s ease-in;
        -moz-animation: fadeOut 1 5s ease-in;
        -o-animation: fadeOut 1 5s ease-in;
        animation: fadeOut 1 5s ease-in;
        -webkit-animation-delay: 17s;
        -moz-animation-delay: 17s;
        -o-animation-delay: 17s;
        animation-delay: 17s;
    }

    #head5 {
        -webkit-animation: finalFade 1 5s ease-in;
        -moz-animation: finalFade 1 5s ease-in;
        -o-animation: finalFade 1 5s ease-in;
        animation: finalFade 1 5s ease-in;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        -o-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-delay: 22s;
        -moz-animation-delay: 22s;
        -o-animation-delay: 22s;
        animation-delay: 22s;
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-o-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeOut {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 0;
        }
    }

    @-moz-keyframes fadeOut {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 0;
        }
    }

    @-o-keyframes fadeOut {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 0;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes finalFade {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes finalFade {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 1;
        }
    }

    @-o-keyframes finalFade {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes finalFade {
        0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        80% {
            opacity: .9;
        }

        100% {
            opacity: 1;
        }
    }

    @media (min-width: 640px) {
        .sm\:block {
            display: block;
        }

        .sm\:hidden {
            display: none;
        }
    }

    * {
        color: #fff;
    }
    </style>
</head>

<body>

    <?php
      $server="localhost";
      $database="adp";
      $username="root";
      $password="vijai1234@";
      $conn=mysqli_connect($server,$username,$password,$database);
      if($conn->connect_error){
          die("connetion failed!!!..".$conn->connect_error);
      }
      if(isset($_GET["submit"])){
          $mail=$_GET["email"];
          $sql = "select * from account where mail = '$mail'";
          $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    $name=$row['name'];
                    $mobile=$row['mobile'];
                    $id=$row['id'] ;
                    $password=$row['password'];
            }
            $to_email = $mail;
          $subject = 'Reset Password';
          $htmlContent =' 
         <html>
          <head>
               <title>Welcome to MVK Hospital</title>
               <style>
                   body {
                     font-family: Verdana, Geneva, Tahoma, sans-serif;
                   }
                </style>
         </head>
         <body>
            <h1>MVK Hospitals</h1>
            <h2>Welcomes you.....</h2>
            Greetings of the Day
            <br />
            <p>
              Mr./Ms. <span>'.$name.'</span> <br> is requested for a reset password. Here is your existing password details. Use it for further process.
              Email : '.$mail.'<br>
              Customer Id :'.$id.'. <br>
              Mobile: '.$mobile.'
              Password :'.$password.'<br>
              Thank you!..<br>With Regards,<br> MVK Hospitals.
              Live long Live Healthy Life
            </p>
    <img style="width: 100%;height: 250px" src="https://drive.google.com/uc?export=view&id=1xu2ikRZr4eWpkavGIzf6FajIZbPXAdCB" />
    <p>
      If this is not you, please inform us at <a href="http://localhost/EPHARMACY/contactform.php">MVK Hospital</a>
    </p>
    <p>Anytime Anywhere At your Coninence
    <br />
    
   
  </body>
</html>';
          $headers = "MIME-Version: 1.0" . "\r\n"; 
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
          $headers .= 'From: '.'MVK HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 
          $headers .= 'Cc: welcome@example.com' . "\r\n"; 
          $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 

                if(mail($mail, $subject, $htmlContent, $headers)){
                    echo "<div id='snackbar' style='background-color: green'>Information sent to the Registered E-Mail ID...</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
                else{
                  echo "<div id='snackbar' style='background-color: dodgerblue'>Sorry, Try again later..</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
             
             
             }
             else{
               echo "<div id='snackbar' >No user found <br> Check the E-mail ID</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
         
          

      }

      if(isset($_GET["submit2"])){
          $mobile=$_GET["mobile"];
          $sql = "select * from account where mobile = '$mobile'";
          $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    $name=$row['name'];
                    $mail=$row['mail'];
                    $id=$row['id'] ;
                    $password=$row['password'];
            }
            $to_email = $mail;
          $subject = 'Reset Password';
          $htmlContent =' 
         <html>
          <head>
               <title>Welcome to MVK Hospital</title>
               <style>
                   body {
                     font-family: Verdana, Geneva, Tahoma, sans-serif;
                   }
                </style>
         </head>
         <body>
            <h1>MVK Hospitals</h1>
            <h2>Welcomes you.....</h2>
            Greetings of the Day
            <br />
            <p>
              Mr./Ms. <span>'.$name.'</span> <br> is requested for a reset password. Here is your existing password details. Use it for further process.<br>
              Email : '.$mail.'<br>
              Mobile: '.$mobile.'
              Customer Id :'.$id.'. <br>
              Password :'.$password.'<br><br>
              Thank you!..<br>With Regards,<br> MVK Hospitals.
              Live long Live Healthy Life
            </p>
    <img style="width: 100%;height: 250px" src="https://drive.google.com/uc?export=view&id=1xu2ikRZr4eWpkavGIzf6FajIZbPXAdCB" />
    <p>
      If this is not you, please inform us at <a href="http://localhost/EPHARMACY/contactform.php">MVK Hospital</a>
    </p>
    <p>Anytime Anywhere At your Coninence
    <br />
    
   
  </body>
</html>';
          $headers = "MIME-Version: 1.0" . "\r\n"; 
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
          $headers .= 'From: '.'MVK HOSPITALS'.'<'.'vijaisuri87@gmail.com'.'>' . "\r\n"; 
          $headers .= 'Cc: welcome@example.com' . "\r\n"; 
          $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 

                if(mail($mail, $subject, $htmlContent, $headers)){
                    echo "<div id='snackbar' style='background-color: green'>Information sent to the Registered E-Mail ID...</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
                else{
                  echo "<div id='snackbar' style='background-color: dodgerblue'>Sorry, Try again later..</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
             
             
             }
             else{
               echo "<div id='snackbar' >No user found <br> Check the Mobile Number</div>";
              echo '<script>var x = document.getElementById("snackbar");
                        x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000)</script>';

                }
         
          

      }
    ?>

    <div class="font-sans absolute w-full h-full flex justify-center items-center">
        <div class="w-[640px] mx-5">
            <h1 class="text-center text-5xl font-bold font-serif">
                MVK Hospitals.
            </h1>
            <p class="text-center mt-2">
                Enter your e-mail ID to get your password and USER ID
            </p>
            <form method="GET" class="relative flex items-center my-10">
                <input style="color: white" type="email" name="email" id="email" placeholder="your@email.com"
                    class="w-full bg-transparent py-3 pl-5 pr-20 border-2 border-solid border-black rounded-0 outline-none placeholder:text-black/50"
                    required />
                <button type="submit"
                    class="absolute h-full right-0 bg-black text-white px-5 flex items-center cursor-pointer hover:bg-black/80">
                    <p class="hidden sm:block">
                        <input type="submit" name="submit" value="SUBMIT" />
                    </p>
                    <i class="bx bx-chevron-right text-2xl block sm:hidden"></i>
                </button>
            </form>

            <h2 style="text-align: center; color: yellow">OR</h2>

            <form method="GET" class="relative flex items-center my-10">
                <input type="number" name="mobile" id="email" placeholder="9999999999"
                    class="w-full bg-transparent py-3 pl-5 pr-20 border-2 border-solid border-black rounded-0 outline-none placeholder:text-black/50"
                    required />
                <button type="submit"
                    class="absolute h-full right-0 bg-black text-white px-5 flex items-center cursor-pointer hover:bg-black/80">
                    <p class="hidden sm:block">
                        <input type="submit" name="submit2" value="SUBMIT" />
                    </p>
                    <i class="bx bx-chevron-right text-2xl block sm:hidden"></i>
                </button>
            </form>

            <div class="container">
                <br>
                <div class="btn"><a href="http://localhost/EPHARMACY/user.php">LOGIN</a></div>
                <div class="btn"><a href="http://localhost/EPHARMACY/user.php">SIGN IN</a></div><br><br>
                <div class="btn"><a href="http://localhost/EPHARMACY/change.php">CHANGE PASSWORD</a></div>
            </div>
            <br>
            <p class="text-center">*your information is safe with us, we don't spam</p>
            <div class='light x1'></div>
            <div class='light x2'></div>
            <div class='light x3'></div>
            <div class='light x4'></div>
            <div class='light x5'></div>
            <div class='light x6'></div>
            <div class='light x7'></div>
            <div class='light x8'></div>
            <div class='light x9'></div>
        </div>
    </div>
</body>

</html>