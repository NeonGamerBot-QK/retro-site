<!-- INSERTED BY ZEON! -->

<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->

<a id="readme-top"></a>

<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
<a href="https://512kb.club"><img src="https://512kb.club/assets/images/orange-team.svg"
               alt="a proud member of the green team of 512KB club" /></a>
[![wakatime](https://wakatime.com/badge/user/018eed1d-6093-4f51-9fca-7863b7a1ac97/project/89c4bc50-59c0-405b-9374-6d9cce1cd478.svg)](https://wakatime.com/badge/user/018eed1d-6093-4f51-9fca-7863b7a1ac97/project/89c4bc50-59c0-405b-9374-6d9cce1cd478)

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/NeonGamerBot-QK/retro-site">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Retro Site</h3>

  <p align="center">
    My Retro Site
    <br />
    <br />
    <a href="https://saahild.com/retro">View Site</a>
    ·
    <a href="https://github.com/NeonGamerBot-QK/retro-site/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/NeonGamerBot-QK/retro-site/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

<!-- [![Product Name Screen Shot][product-screenshot]](https://example.com) -->

Epic retro site

<p align="right">(<a href="#readme-top">back to top</a>)</p>
<!-- GETTING STARTED -->

## Getting Started

Make sure you have nodejs installled.

- bun
  ```sh
  bun install
  ```
- dev mode

```
 bun dev

```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

#### _tip for also easily adding buttons_

```js
(async () => {
  if (!window.button_collection) window.button_collection = [];
  setInterval(() => {
    const els = Array.from(
      document.querySelector(".compact-button-grid").children,
    ).filter((e) => !e.getAttribute("data-tagged"));
    els.forEach((el) => {
      el.oncontextmenu = () => {
        const imgTag = el.querySelector("img");
        let obj = {
          name: imgTag.src.split("/i/")[1],
          url: imgTag.src,
        };
        console.log(obj);
        window.button_collection.push(obj);
      };
      el.setAttribute("data-tagged", true);
    });
  }, 50);
})();
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Top contributors:

<a href="https://github.com/NeonGamerBot-QK/retro-site/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=NeonGamerBot-QK/retro-site" alt="contrib.rocks image" />
</a>

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Neon - neon@saahild.com

Project Link: [https://github.com/NeonGamerBot-QK/retro-site](https://github.com/NeonGamerBot-QK/retro-site)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->

## Acknowledgments

- [512kb](https://512kb.club/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/NeonGamerBot-QK/retro-site.svg?style=for-the-badge
[contributors-url]: https://github.com/NeonGamerBot-QK/retro-site/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/NeonGamerBot-QK/retro-site.svg?style=for-the-badge
[forks-url]: https://github.com/NeonGamerBot-QK/retro-site/network/members
[stars-shield]: https://img.shields.io/github/stars/NeonGamerBot-QK/retro-site.svg?style=for-the-badge
[stars-url]: https://github.com/NeonGamerBot-QK/retro-site/stargazers
[issues-shield]: https://img.shields.io/github/issues/NeonGamerBot-QK/retro-site.svg?style=for-the-badge
[issues-url]: https://github.com/NeonGamerBot-QK/retro-site/issues
[license-shield]: https://img.shields.io/github/license/NeonGamerBot-QK/retro-site.svg?style=for-the-badge
[license-url]: https://github.com/NeonGamerBot-QK/retro-site/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
