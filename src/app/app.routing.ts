import { Routes, RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { HomeComponent } from './home';
import { NavBarComponent } from './nav-bar';
import { PlayhouseComponent } from './home/playhouse';
import { NominationSectionComponent } from './home/nomination-section';
import { HeaderSectionComponent } from './home/header-section';
import { NominationsComponent } from './nominations';
import { ContactUsComponent } from './contact-us';

const routes: Routes = [
  { 
    path: "",
    component: HomeComponent,
   },
   { 
    path: "nominations",
    component: NominationsComponent,
   },
   { 
    path: "contact-us",
    component: ContactUsComponent,
   }
];

export const declarations = [
  HomeComponent,
  NavBarComponent,
  PlayhouseComponent,
  NominationSectionComponent,
  HeaderSectionComponent,
  NominationsComponent,
  ContactUsComponent
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash:true})],
  exports: [RouterModule]
})

export class AppRouting { }
