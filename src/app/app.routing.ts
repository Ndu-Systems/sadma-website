import { Routes, RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { HomeComponent } from './home';
import { NavBarComponent } from './nav-bar';
import { PlayhouseComponent } from './home/playhouse';
import { NominationSectionComponent } from './home/nomination-section';

const routes: Routes = [
  { 
    path: "",
    component: HomeComponent,
   },
];

export const declarations = [
  HomeComponent,
  NavBarComponent,
  PlayhouseComponent,
  NominationSectionComponent
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash:true})],
  exports: [RouterModule]
})

export class AppRouting { }
