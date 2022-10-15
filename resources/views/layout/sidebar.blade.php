<div id="nav" class="nav-container d-flex ">
      <div class="nav-content d-flex">



        <!-- User Menu Start -->
        <div class="user-container d-flex">
          <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('temp/img/user.png') }}" />
            <div class="name">{{ $user->name }}</div>
          </a>
          <div class="dropdown-menu dropdown-menu-end user-menu wide">

            <div class="row mb-1 ms-0 me-0">

              <div class="col-6 ps-1 pe-1">
                <ul class="list-unstyled">
                  <li>
                    <a href="#">
                      <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                      <span class="align-middle">Profile</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 p-1 mb-3 pt-3">
                <div class="separator-light"></div>
              </div>
              <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">

                  <li>
                    <a href="#">
                      <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                      <span class="align-middle">Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
          <ul id="menu" class="menu">
            <li>
              <a href="#dashboards" data-href="/Dashboards">
                <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                <span class="label">Dashboards</span>
              </a>
              <ul id="dashboards">
                <li>
                  <a href="{{ asset('temp/') }}}Dashboards/Default.html">
                    <span class="label">Default</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Dashboards/Visual.html">
                    <span class="label">Visual</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Dashboards/Analytic.html">
                    <span class="label">Analytic</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#apps" data-href="/Apps">
                <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                <span class="label">Apps</span>
              </a>
              <ul id="apps">
                <li>
                  <a href="{{ asset('temp/') }}}Apps/Calendar.html">
                    <span class="label">Calendar</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Apps/Chat.html">
                    <span class="label">Chat</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Apps/Contacts.html">
                    <span class="label">Contacts</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Apps/Mailbox.html">
                    <span class="label">Mailbox</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Apps/Tasks.html">
                    <span class="label">Tasks</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#pages" data-href="/Pages">
                <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                <span class="label">Pages</span>
              </a>
              <ul id="pages">
                <li>
                  <a href="#authentication" data-href="/Pages/Authentication">
                    <span class="label">Authentication</span>
                  </a>
                  <ul id="authentication">
                    <li>
                      <a href="../Authentication/Login.html">
                        <span class="label">Login</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Authentication/Register.html">
                        <span class="label">Register</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Authentication/ForgotPassword.html">
                        <span class="label">Forgot Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Authentication/ResetPassword.html">
                        <span class="label">Reset Password</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#blog" data-href="/Pages/Blog">
                    <span class="label">Blog</span>
                  </a>
                  <ul id="blog">
                    <li>
                      <a href="../Blog/Home.html">
                        <span class="label">Home</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Blog/Grid.html">
                        <span class="label">Grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Blog/List.html">
                        <span class="label">List</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Blog/Detail.html">
                        <span class="label">Detail</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#miscellaneous" data-href="/Pages/Miscellaneous">
                    <span class="label">Miscellaneous</span>
                  </a>
                  <ul id="miscellaneous">
                    <li>
                      <a href="Faq.html">
                        <span class="label">Faq</span>
                      </a>
                    </li>
                    <li>
                      <a href="KnowledgeBase.html">
                        <span class="label">Knowledge Base</span>
                      </a>
                    </li>
                    <li>
                      <a href="Error.html">
                        <span class="label">Error</span>
                      </a>
                    </li>
                    <li>
                      <a href="ComingSoon.html">
                        <span class="label">Coming Soon</span>
                      </a>
                    </li>
                    <li>
                      <a href="Pricing.html">
                        <span class="label">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a href="Search.html">
                        <span class="label">Search</span>
                      </a>
                    </li>
                    <li>
                      <a href="Mailing.html">
                        <span class="label">Mailing</span>
                      </a>
                    </li>
                    <li>
                      <a href="Empty.html">
                        <span class="label">Empty</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#portfolio" data-href="/Pages/Portfolio">
                    <span class="label">Portfolio</span>
                  </a>
                  <ul id="portfolio">
                    <li>
                      <a href="../Portfolio/Home.html">
                        <span class="label">Home</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Portfolio/Detail.html">
                        <span class="label">Detail</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#profile" data-href="/Pages/Profile">
                    <span class="label">Profile</span>
                  </a>
                  <ul id="profile">
                    <li>
                      <a href="../Profile/Standard.html">
                        <span class="label">Standard</span>
                      </a>
                    </li>
                    <li>
                      <a href="../Profile/Settings.html">
                        <span class="label">Settings</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#blocks" data-href="/Blocks">
                <i data-acorn-icon="grid-5" class="icon" data-acorn-size="18"></i>
                <span class="label">Blocks</span>
              </a>
              <ul id="blocks">
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Cta.html">
                    <span class="label">Cta</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Details.html">
                    <span class="label">Details</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Gallery.html">
                    <span class="label">Gallery</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Images.html">
                    <span class="label">Images</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/List.html">
                    <span class="label">List</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Stats.html">
                    <span class="label">Stats</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Steps.html">
                    <span class="label">Steps</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/TabularData.html">
                    <span class="label">Tabular Data</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Thumbnails.html">
                    <span class="label">Thumbnails</span>
                  </a>
                </li>
                <li>
                  <a href="{{ asset('temp/') }}}Blocks/Users.html">
                    <span class="label">Users</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="mega">
              <a href="#interface" data-href="/Interface">
                <i data-acorn-icon="pocket-knife" class="icon" data-acorn-size="18"></i>
                <span class="label">Interface</span>
              </a>
              <ul id="interface">
                <li>
                  <a href="#interfaceComponents" data-href="/Interface/Components">
                    <span class="label">Components</span>
                  </a>
                  <ul id="interfaceComponents">
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Accordion.html">
                        <span class="label">Accordion</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Alerts.html">
                        <span class="label">Alerts</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Badge.html">
                        <span class="label">Badge</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Breadcrumb.html">
                        <span class="label">Breadcrumb</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Buttons.html">
                        <span class="label">Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/ButtonGroup.html">
                        <span class="label">Button Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Card.html">
                        <span class="label">Card</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/CloseButton.html">
                        <span class="label">Close Button</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Collapse.html">
                        <span class="label">Collapse</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Dropdowns.html">
                        <span class="label">Dropdowns</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/ListGroup.html">
                        <span class="label">List Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Modal.html">
                        <span class="label">Modal</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Navs.html">
                        <span class="label">Navs</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Offcanvas.html">
                        <span class="label">Offcanvas</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Pagination.html">
                        <span class="label">Pagination</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Popovers.html">
                        <span class="label">Popovers</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Progress.html">
                        <span class="label">Progress</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Spinners.html">
                        <span class="label">Spinners</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Toasts.html">
                        <span class="label">Toasts</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Components/Tooltips.html">
                        <span class="label">Tooltips</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#interfaceForms" data-href="/Interface/Forms">
                    <span class="label">Forms</span>
                  </a>
                  <ul id="interfaceForms">
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/Layouts.html">
                        <span class="label">Layouts</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/Validation.html">
                        <span class="label">Validation</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/Wizard.html">
                        <span class="label">Wizard</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/InputGroup.html">
                        <span class="label">Input Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/InputMask.html">
                        <span class="label">Input Mask</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Forms/GenericForms.html">
                        <span class="label">Generic Forms</span>
                      </a>
                    </li>
                    <li>
                      <a href="#formControls" data-href="/Interface/Forms/Controls">
                        <span class="label">Controls</span>
                      </a>
                      <ul id="formControls">
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Autocomplete.html">
                            <span class="label">Autocomplete</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/CheckboxRadio.html">
                            <span class="label">Checkbox-Radio</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/DatePicker.html">
                            <span class="label">Date Picker</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Dropzone.html">
                            <span class="label">Dropzone</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Editor.html">
                            <span class="label">Editor</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/InputSpinner.html">
                            <span class="label">Input Spinner</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Rating.html">
                            <span class="label">Rating</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Select2.html">
                            <span class="label">Select2</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Slider.html">
                            <span class="label">Slider</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/Tags.html">
                            <span class="label">Tags</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Forms/Controls/TimePicker.html">
                            <span class="label">Time Picker</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#interfacePlugins" data-href="/Interface/Plugins">
                    <span class="label">Plugins</span>
                  </a>
                  <ul id="interfacePlugins">
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Carousel.html">
                        <span class="label">Carousel</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Charts.html">
                        <span class="label">Charts</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Clamp.html">
                        <span class="label">Clamp</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/ContextMenu.html">
                        <span class="label">Context Menu</span>
                      </a>
                    </li>
                    <li>
                      <a href="#pluginsDatatables" data-href="/Interface/Plugins/Datatables">
                        <span class="label">Datatables</span>
                      </a>
                      <ul id="pluginsDatatables">
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Plugins/Datatables/EditableRows.html">
                            <span class="label">Editable Rows</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Plugins/Datatables/EditableBoxed.html">
                            <span class="label">Editable Boxed</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Plugins/Datatables/RowsAjax.html">
                            <span class="label">Ajax Data</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Plugins/Datatables/RowsServerSide.html">
                            <span class="label">Server Side</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Plugins/Datatables/BoxedVariations.html">
                            <span class="label">Boxed Variations</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Lightbox.html">
                        <span class="label">Lightbox</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/List.html">
                        <span class="label">List</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Maps.html">
                        <span class="label">Maps</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Notify.html">
                        <span class="label">Notify</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Player.html">
                        <span class="label">Players</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Progress.html">
                        <span class="label">Progress</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Scrollbar.html">
                        <span class="label">Scrollbar</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Shortcuts.html">
                        <span class="label">Shortcuts</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Plugins/Sortable.html">
                        <span class="label">Sortable</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#interfaceContent" data-href="/Interface/Content">
                    <span class="label">Content</span>
                  </a>
                  <ul id="interfaceContent">
                    <li>
                      <a href="#icons" data-href="/Interface/Content/Icons">
                        <span class="label">Icons</span>
                      </a>
                      <ul id="icons">
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Icons/AcornInterface.html">
                            <span class="label">Acorn Interface</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Icons/AcornCommerce.html">
                            <span class="label">Acorn Commerce</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Icons/AcornLearning.html">
                            <span class="label">Acorn Learning</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Icons/AcornMedical.html">
                            <span class="label">Acorn Medical</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Icons/BootstrapIcons.html">
                            <span class="label">Bootstrap Icons</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Content/Images.html">
                        <span class="label">Images</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Content/Tables.html">
                        <span class="label">Tables</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ asset('temp/') }}}Interface/Content/Typography.html">
                        <span class="label">Typography</span>
                      </a>
                    </li>
                    <li>
                      <a href="#menuVarieties" data-href="/Interface/Content/Menu">
                        <span class="label">Menu</span>
                      </a>
                      <ul id="menuVarieties">
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/HorizontalStandard.html">
                            <span class="label">Horizontal</span>
                          </a>
                        </li>
                        <li></li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/VerticalStandard.html">
                            <span class="label">Vertical</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/VerticalSemiHidden.html">
                            <span class="label">Vertical Hidden</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/VerticalNoSemiHidden.html">
                            <span class="label">Vertical No Hidden</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/MobileOnly.html">
                            <span class="label">Mobile Only</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ asset('temp/') }}}Interface/Content/Menu/Sidebar.html">
                            <span class="label">Sidebar</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
          <!-- Scrollspy Mobile Button Start -->
          <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
          </a>
          <!-- Scrollspy Mobile Button End -->

          <!-- Scrollspy Mobile Dropdown Start -->
          <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
          <!-- Scrollspy Mobile Dropdown End -->

          <!-- Menu Button Start -->
          <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
          </a>
          <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
      </div>
      <div class="nav-shadow"></div>
    </div>
