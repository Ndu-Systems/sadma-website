import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.scss']
})
export class NavBarComponent implements OnInit {
  showNav: boolean = false;
  constructor() { }

  ngOnInit() {
  }

  toggleNav() {
    this.showNav = !this.showNav;
  }


}
