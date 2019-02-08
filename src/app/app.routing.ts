import { Routes, RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { HomeComponent } from './home';
import { NavBarComponent } from './nav-bar';

const routes: Routes = [
  { 
    path: "",
    component: HomeComponent,
   },
];

export const declarations = [
  HomeComponent,
  NavBarComponent
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash:true})],
  exports: [RouterModule]
})

export class AppRouting { }
