# K-ptain.Ratz-GUI
<div id="top"></div>
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
[![MIT License][license-shield]][license-url]
[![Issues][issues-shield]][issues-url]


<!-- ABOUT THE PROJECT -->
## K-ptain.Ratz-GUI


K-ptain.Ratz is a R.A.T (Remote Access Tool) written in Rust and made for @ESGI with :

* [Rust](https://www.rust-lang.org/fr)
* [PHP](https://www.php.net/)
* [sqlite3](https://www.sqlite.org/download.html)

This version include the web GUI written in JavaScript and is linked to : https://github.com/Denis-REMACLE/K-ptain.Ratz


### Installation

1. To install `K-ptain.Ratz-GUI` clone the repo
   ```sh
   git clone https://github.com/Denis-REMACLE/K-ptain.Ratz.git
   ```

2. Get into the `k-ptain` directory then simply run the `install.sh`
   ```sh
   chmod +x install.sh
   ```
  
   ```sh
   ./install.sh
   ```
   
3. In a web browser, go to the login page `(Default : admin:admin` : http://%YOURSERVERIP%/gui/index.php

## Get started


The main admin dashboard contains all infected targets and deliver a simple way to manage them :

![dashboard](https://raw.githubusercontent.com/nzkoxzu/K-ptain.Ratz-GUI/main/images/dashboard.png)


.This web UI also allow user to use different payloads on the infected node like :

* [Remote Desktop Control session](https://github.com/novnc/noVNC)
* [Live webcam stream](https//github.com/gen2brain/cam2ip)
* [Reverse Shell]()


## Disclaimer

This project was made for educational purpose only and we do not keep responsibility of any bad usage.


## Contributing

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue :

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the GPL License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/Denis-REMACLE/K-ptain.Ratz.svg?style=for-the-badge&logo=appveyor&color=success
[contributors-url]: https://github.com/Denis-REMACLE/K-ptain.Ratz/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/Denis-REMACLE/K-ptain.Ratz.svg?style=for-the-badge&logo=appveyor&color=yellow
[forks-url]: https://github.com/Denis-REMACLE/K-ptain.Ratz/network/members
[license-shield]: https://img.shields.io/github/license/Denis-REMACLE/K-ptain.Ratz.svg?style=for-the-badge&logo=appveyor&color=orange
[license-url]: https://github.com/Denis-REMACLE/K-ptain.Ratz/blob/master/LICENSE.txt
[issues-shield]: https://img.shields.io/github/issues/Denis-REMACLE/K-ptain.Ratz.svg?style=for-the-badge&logo=appveyor&color=red
[issues-url]: https://github.com/Denis-REMACLE/K-ptain.Ratz/issues
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&color=informational
[linkedin-url]: https://linkedin.com/in/linkedin_username

