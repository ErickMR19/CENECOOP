Synthesia
http://synthesiagame.com

Copyright (c)2006-2015 Synthesia LLC
Synthesia is a registered trademark of Synthesia LLC in the United States.

--------------------------------------------------------------------------------

Synthesia has been created primarily by Nicholas Piegdon and Timothy Lusk.

The following people have also contributed:
- David Scott created the instrument icons on the Song Settings screen
- pixel-mixer.com provided additional user interface graphics
- tommai78101 from the forums created the percussion overlay icons
- Electrode from the forums helped with Movable Do and English note labels
- Dave Ray provided the ubiquitous STRING macro
- Daniel Lawrence suggested the name Synthesia
- Hundreds of others provided ideas in email and via the Synthesia Talk forums

--------------------------------------------------------------------------------

Synthesia for iPad uses a sound set licensed by Voice Crystal(R) for Synthesia
use only.  Redistribution is prohibited. Visit VoiceCrystal.com for more info.

--------------------------------------------------------------------------------

Synthesia uses these 3rd-party libraries.  See license.txt for full licenses.
- The FreeImage Project, under the FIPL v1.0.
- pugixml using the MIT license.

--------------------------------------------------------------------------------

The music in the "Ash's Exercises" folder has been contributed by Ashley Kampta,
and may be used under the Creative Commons CC-BY-NC 3.0 Unported license.  Ash
goes by Electrode in the forums and posts new exercises, here:
https://www.synthesiagame.com/forum/viewtopic.php?f=7&t=3673


The music in the "G Major Music" folder is courtesy of Gilbert DeBenedetti's
G Major Music Theory website.  Find more at http://gmajormusictheory.org

All of the pieces were split into two-hands, quantized, corrected, and cleaned
up by Choul, Rickeeey, TieDyeGuy, DamienBlack, GoPlus, and Nicholas from the
Synthesia Talk forums.

Finger hints were added from the original PDF sheet music at G Major Music by
Pianotehead, TieDyeGuy, Zaeleus, DC64, and Nicholas.


Finger hints for Chorale Setting in F Major, composed by J. S. Bach were
provided by jimhenry from the Synthesia Talk forums.

Music Device output test music is Fugue in G Minor KV 154/385k, composed
by W. A. Mozart, courtesy of the Mutopia Project.  http://mutopiaproject.org

--------------------------------------------------------------------------------


Change Log

Synthesia 10.1 - 01/2015
------------------------
NEW: Added Dutch user-interface language support.
CHG: The free songs available from the Synthesia Music Store are now treated as
     demo songs while Synthesia is still locked.
CHG: When changing track colors, an X is now shown on the gray "hidden" entry.
FIX: Performance results were sometimes being sent to the wrong scoreboards.
FIX: Transitions between screens would sometimes get stuck on the last screen.
FIX: Loops would sometimes hang at the end, after the first time through.
FIX: Rewinding sometimes wouldn't reset the hit/missed state of notes near the
     previous song time.
FIX: Synthesia for tablets no longer shows an unresponsive black screen after
     using the Menu Back shortcut on the title screen.
FIX: Suppressed a crash in anonymous performance upload.
FIX: MIDI events sent after a reset (between screens) were sometimes lost.
FIX: Resetting a percussion track now hides it once again.
FIX: Rhythm/recital points now count up correctly again.



Synthesia 10 - 12/2014
----------------------
NEW: The hand assignment and "Played by X" track settings have been combined in
     a way that makes a lot more sense.
NEW: Choosing "Custom" for a track's hand assignment opens a new screen that
     allows you to choose left/right/background on a note-by-note basis.
NEW: On the Custom part screen, you can "discard" a note, which will hide and
     mute just that note.
NEW: The Simple/Advanced song settings views no longer duplicate functionality
     and have much clearer defined roles.
NEW: Free Play: experiment with instruments, back-beats, and chords as you play.
NEW: As you approach the end of a loop, the falling note area now shows the next
     iteration of the loop instead of notes from later in the song.  So there is
     no longer a disorienting jump just as your loop wraps around.
NEW: You can now add a delay between successive loops.  Control the delay length
     by adjusting the slider in loop editing mode.  The default is 1.5 seconds.
NEW: Added Italian user-interface language support.
NEW: Finger substitution hints.  After adding a finger hint to a note, the hint
     popup should show a '+' between the hands for the same note.  Selecting it
     will add another hint that can be changed independently of the first. This
     kind of hint indicates the finger holding that piano key should transition
     to the other finger without releasing the key.
NEW: Music output devices can now distinguish between "My Notes" and background
     parts.  If you disable "My Notes" output, it will prevent duplicate notes
     caused when both your key presses and Synthesia tell your keyboard to play
     the same note.
NEW: The vertical divider lines between B/C and E/F are now shaded alternately
     to help quickly find your place on the keyboard.
NEW: Improved anonymous analytics to include whole performances.
NEW: Music output devices can now control your keyboard's "Local" setting, if
     your keyboard supports it.  This is an alternative method to solve the
     duplicate note problem mentioned above.
NEW: Music output devices now have a master enabled/disabled toggle so you don't
     have to micromanage the individual (notes, metronome, percussion, etc.)
     settings whenever you just want to quickly switch devices.
NEW: Music output devices now have an "Output Channel" setting, which is handy
     for older keyboards that don't listen to all channels.
NEW: You can now slide the keyboard below the screen.  This is helpful if you're
     using a projector or large screen with Synthesia keys lined up with your
     own.  Pause the song, and use the slider that pops out at the right side.
NEW: Keys now visually lift briefly between back-to-back successive notes.
NEW: You can now assign shortcuts to MIDI Machine Control (MMC) and real-time
     MIDI messages.  This is useful with keyboards that have extra buttons.
NEW: Extended media and browser keys (play/pause, search, etc.) on typing
     keyboards can now be assigned to shortcuts, in the Windows version.
NEW: Pedal+ shortcuts let you hold any of the three piano pedals along with any
     other input (note, mouse button, key, MIDI CC, MMC, etc.) when assigning a
     shortcut.  These are great for assigning keyboard notes to a routine task
     like changing the song speed or FF/RW without otherwise "using up" a key.
NEW: Sheet music can now be shown or hidden during play.
NEW: Title screen news shows the latest information about the project.
NEW: Title screen recent songs list lets you jump back to a song in one click.
NEW: Multi-touch touch-screen input is now recognized in Windows 7 and 8.  You
     can now use the pinch-to-zoom gestures from the iPad version.
NEW: Automatic Windows crash report upload will help catch critical bugs faster.
NEW: Windows uninstaller now has an option to remove saved data.
NEW: A delete button is now shown when a song cannot be loaded.
NEW: The score box now shakes (and error count turns red) after mistakes.
NEW: Synthesia now remembers which monitor it was last started on.
NEW: Synthesia now supports high DPI scaling on Windows.
NEW: Tapping/clicking on a song's rating or difficulty now shows a popup that
     makes it easier to set and prevents accidental changes while scrolling
     through the song list.
NEW: Keyboard and falling note labels are now easier to read, scale better
     with zoom level, and now center correctly on small notes.
NEW: To add even more contrast behind key and note labels, enable the advanced
     Keyboard.LabelBackground setting.
NEW: Added the "Midi.KeyLightVelocity" advanced setting to override the default
     velocity of 1 that is used for lighted key MIDI notes.  (Some keyboards
     blink their key lights with velocity=1 and only hold steady at 2.)
NEW: Advanced "Gameplay.AllowFanfare" setting that can be disabled to prevent
     the fanfare song and confetti from happening after finishing a song.
NEW: Advanced "Metronome.LatencyOffsetUs" setting to push the metronome ticks
     forward or backward some number of microseconds, to better compensate for
     latency between your (piano-only) keyboard and the built-in synth.
NEW: The visibility of all bookmark types (including MIDI markers) can now be
     toggled right from the bookmarks overlay during a song.
NEW: The MIDI channel number is now shown for each track on the Hands, Colors,
     and Instruments screen.  This can help map external VSTi settings.
NEW: The text from markers stored in a MIDI song is now shown in the margin of
     the falling note area, just like metadata bookmarks.
NEW: The current loop is now saved for each song between plays.
NEW: MIDI files using SMPTE time can now be loaded.  However, Synthesia cannot
     generate sheet music from this (extremely rare) kind of MIDI file.
CHG: The Learning Pack has been replaced.  Instead of unlocking a vague set of
     premium features throughout the interface, there is now a much simpler
     "Unlock Synthesia" mechanism that works exactly the same as Synthesia for
     iPad: when locked only a handful of demo songs are available.  Unlocking
     lets you play any song.  All features are always available everywhere.
     Existing Learning Pack keys now unlock Synthesia exactly as they used to.
CHG: Notes are now drawn with flat shading for a more modern look.
CHG: Notes played before the song starts are no longer counted as mistakes.
CHG: Hitting a correct note more than once (while the note is still running)
     no longer halts the song or counts as a mistake.
CHG: The fast-forward and rewind shortcuts (default left/right arrow keys) now
     adjust the song by one measure at a time.  Previously: 3 seconds at a time.
CHG: The various loop editing shortcuts and buttons in the looping overlay will
     now acknowledge the existence of metadata bookmarks.
CHG: Bookmarks can now be created at the very beginning of the song.
CHG: Points earned in melody practice no longer depend on the song's speed or
     how long you spent playing it.
CHG: Windows uninstaller now lets you remove music separately from the app.
CHG: Several improvements to the Windows installer.
CHG: Synthesia now internally keeps track of time much more accurately.  For
     example, the FPS counter is now much more stable.
CHG: Large MIDI songs now consume much less memory.
CHG: Flagged the Windows executable to allow >1GB of RAM usage, for huge songs.
CHG: Substantially improved MIDI loading speed.
CHG: The "Midi.ResetAllSoundOff" advanced setting will now also kick off a Hold
     Pedal Off and All Notes Off message to every channel, too.
CHG: Preview versions of Synthesia (downloaded from the "Development Updates"
     section of the forums) now use a separate "SynthesiaDev" data directory
     to allow easier testing without changing settings in the official release.
CHG: Holding the sustain pedal no longer extends the length of notes for scoring
     purposes.  This was to correct for poor-quality songs that used extra-long
     notes to create a sustain-like effect, but it had the unintended side
     effect of teaching bad pedaling habits.
CHG: The vertical divider lines between B/C and E/F are now shaded alternately
     to help quickly find your place on the keyboard.
CHG: Sustain pedal is now sent to output even during "Watch and Listen Only".
CHG: Pitch bend wheel is now sent to output.
CHG: Removed colored note name option.
CHG: Removed letter grades from the "Points Earned" and "Statistics" screens.
CHG: Removed several command line options: --bookmark-count, --play-mode,
     --channel-mode, --user-part, --simple-mode, and --simple-sheet.
CHG: The config tool now only shows settings that cannot be set in Synthesia.
CHG: The list of advanced settings in the config tool is now alphabetized.
CHG: Only prevent screensavers when Synthesia is the currently active app.
FIX: Finger hint interface can no longer fall off the edge of the iPad's screen.
FIX: The hotspot for data table column sorting now resizes correctly when the
     Synthesia window is resized.
FIX: The OpenGL renderer should no longer show texture filtering artifacts.
FIX: In rare cases, some controller messages weren't being sent to output.
FIX: Don’t suddenly consume 100% CPU when window not visible on OS X.
FIX: Your previous score will once again be automatically scrolled into view in
     the data table when there would be enough scores to push it off screen.
FIX: Synthesia should more reliably close/reset MIDI devices without crashing.
FIX: Songs on unavailable network paths should no longer cause a crash.
FIX: Bad time signature events in a song should no longer cause a crash.
FIX: Non-ASCII text should work in text boxes again.
FIX: Improved data file writing to hopefully (once again) avoid data corruption.
FIX: Measure lines no longer jitter at slow song speeds.
FIX: Fixed a crash during... automatic crash uploading.
FIX: Touch input on Windows now behaves less strangely.
FIX: IME language input now works on Windows again.
FIX: CC#88 (high resolution velocity prefix) no longer breaks shortcut binding.
FIX: Virtual piano labels now appear in the correct location even when other
     input devices (with larger note ranges) are enabled simultaneously.
FIX: Songs can now be deleted from the song library again.
FIX: Synthesia no longer duplicates SysEx events while splitting tracks.
FIX: Zoom, speed, and bookmarks now save if Synthesia is closed during play.
FIX: Synthesia is now better at preventing multiple instances from starting,
     which should help prevent data file corruption.



Synthesia 9 - 10/2013
---------------------
REQUIREMENTS: Synthesia for Mac now requires at least OS 10.6

NEW: Multiple languages! Use Synthesia in English, Spanish, French, German,
     Russian, Brazilian Portuguese, or Traditional Chinese!  Change the display
     language using the button in the bottom-left corner of the title screen.
NEW: Game window can now be resized and maximized.  Use Alt-Enter on Windows or
     the full-screen button on Mac to toggle full screen mode.
NEW: More mouse cursors: hand for buttons and I-beam for text boxes.
NEW: Newly added Synthesia Music Store metadata is downloaded automatically.
NEW: Advanced "Gameplay.FingerNames" setting to adjust the text that shows up
     for each finger hint (typically 1, 2, 3, 4, 5).
CHG: Removed custom mouse cursors in favor of standard system cursors.
CHG: Renamed "Synthesia Software Keyboard" to "Synthesia Virtual Piano".
CHG: Lots of other subtle text changes in preparation for translations.
FIX: Creating a loop that touched the beginning of a song would crash on iPad.
FIX: Background image paths containing quotes will now work.



Synthesia 8.6 - 09/2013
-----------------------
NEW: When launching Synthesia with a song (via right-click shortcut or dragging
     the song to the program icon), Synthesia will now search that song's folder
     and a few folders above it looking for .synthesia metadata files so the
     song gets all the benefit of things like finger hints, hand parts, etc.
NEW: Added support for the "Background Image" metadata field.  Images (using a
     path relative to the metadata file) will be loaded and shown in the
     background during play.  The width of the image will be stretched to fit
     the window, adjusting the height to preserve the aspect ratio of the image.
     Control how opaque it's drawn with the Gameplay.BackgroundImageAlpha
     setting (from 0 to 255).  JPEG, PNG, GIF, BMP, TIFF, and more supported!
     Set a default image using the Gameplay.BackgroundImagePath setting.
NEW: If seeing the score counter during play is too stressful, click to hide it!
NEW: Added support for extended GS drum patches on iPad.
NEW: News that appears on the title screen now includes a button to launch the
     Synthesia website using your default web browser.
NEW: Added support for the new "Made Famous By" metadata field.  It will show on
     a song's title bar and can be searched in the song library.
NEW: Added support for "named bookmarks" in metadata.  These display in a new
     color on the song timeline and the bookmark name is shown falling in the
     left margin of the song. These can be hidden by disabling the advanced
     "Gameplay.ShowNamedBookmarks" setting.
NEW: Manually placing data files from the Synthesia data directory into the
     system version of the same folder (ProgramData\Synthesia on Windows and
     "/Library/Application Support/Synthesia" in OS X) will make Synthesia read
     those on startup instead of the user-space versions.  (User versions will
     still be written when Synthesia closes.)  This is useful for classrooms
     where consistent, uniform settings are important.  Recommended system-level
     data files are "multiDevice", "settings", and "folders".  That will keep
     device settings, the Learning Pack unlock, and which (network) folders are
     scanned for songs, respectively.  ("Scores"/"tracks" are not recommended!)
CHG: Reintroduced "Scale Number" to the list of label modes.
CHG: While in full logging mode (default F7), finger hints will be written using
     no measure jumps.  This can help port finger hints between different MIDIs
     that have very only small changes between them.
CHG: The menu drawer now tucks even further when unpinned.
CHG: Using the "Menu Continue" shortcut (Enter by default) from the simple song
     view will now activate the selected mode button instead of simply playing
     the song using the previously used (advanced) settings.
CHG: Only auto-shift octaves as far as necessary to include as many notes as
     possible.  Synthesia no longer tries to center your keyboard on the notes.
FIX: Never auto-shift the octave of full 88-key keyboards.
FIX: Enabling key lights should no longer cause tempo, key/time signature, and
     MIDI marker information to be discarded.
FIX: When returning to the song library, the previously loaded song is now once
     again automatically highlit and scrolled to.
FIX: Keys now light correctly no matter the octave shift.
FIX: Finger hint output was creating far more measure jumps than necessary.
FIX: The big button in popup notifications (like the "Progress will be lost"
     message can now be activated using the Menu Proceed shortcut (which is
     the Enter key by default).
FIX: Song library "Row still not found after cache replacement" crash.
FIX: Song loading should no longer crash in rare cases due to tempo MIDI events.
FIX: Song title bar text outlines in Windows 8 now render correctly.
FIX: Breadcrumb and search box are no longer partially inaccessible in the song
     library based on partially scrolled song rows.
FIX: Still tracking down the super-rare data file corruption in Windows: files
     are now tested for corruption before committing them to the data folder.
FIX: Using a window width smaller than 1024 pixels could make the additional
     fields shown on the title at the beginning of a song (arranger, copyright,
     etc.) to appear unreadably small.



Synthesia 8.5 - 03/2013
-----------------------
NEW: Faster/easier way to hold onto and enter your Learning Pack key: there is
     now a shorter code that can be used to look up the longer version from the
     website automatically.  You only need to remember a few letters/numbers.
NEW: Exotic keyboards that send "All Notes Off" instead of "Note Off" messages
     are now handled correctly (or at least as correctly as they can be).
FIX: Using only input devices that don't have their note range set will no
     no longer skip all notes in melody practice.  Instead, their range will be
     treated as though they have the full 88 keys available.
FIX: Don't reset newly added finger hints with the rest of the stats that are
     reset when a song is restarted.
FIX: iPad: In-app purchases should no longer fail during the validation step.
FIX: Removing songs or folders in your filesystem while Synthesia is running
     should no longer cause a crash.
FIX: Settings can now be saved/loaded again for Windows users with Unicode
     characters in their usernames.
FIX: Sheet music resize bar displays correctly when Gameplay.PinMenuDrawerOpen
     advanced setting is turned off.
FIX: The "All Songs (grouped by folder)" meta-group will now always be shown,
     even when there are no other groups in the song library.
FIX: Sheet music resize bar now shows under loop, bookmark, and finger hint UI.
FIX: Keyboard zoom should no longer shimmy between song attempts.
FIX: Zoom menu is now wide enough that controls don't fall off the edges when
     the "My Keyboard" option is available.
FIX: Double-clicking a simple part button shouldn't start the song paused.
FIX: Synthesia should no longer crash after plugging a device back in.
FIX: iPad: Imported songs could become unavailable in rare cases.
FIX: Rests in sheet music should no longer have drawing glitch under them.
FIX: Hitting the "Change Notation Size" shortcut (default F3) when there isn't
     any sheet music currently shown should no longer cause a crash.
FIX: In rare circumstances when using channel 1 key lights, a MIDI track
     containing only meta events and SysEx would be ignored.
FIX: Adjusting rating or difficulty in the song library would sometimes change
     the song above it instead.



Synthesia 8.4 - 12/2012
-----------------------
REQUIREMENTS: Synthesia for Mac now requires at least an OS 10.5+ Intel Mac.

NEW: Completely new keyboard graphics!  Remastered falling-note graphics, too.
NEW: The old, single "Played by Synthesia, Notes Muted" style setting for an
     instrument has been broken up into independently controllable components:
     Played by Me/Synthesia, Shown/Hidden, and Sounded/Muted.  This allows for
     two (strange) new modes not previously available: me|hidden|sounded and
     me|hidden|muted.  That last one probably won't be especially useful. ;)
NEW: Change the color theme via the settings screen.
NEW: Summary play statistics have been added to the profiles section of the
     settings screen for each user profile.
NEW: An "All Songs (grouped by folder)" entry in the song library will help
     users take advantage of their meticulously organized MIDI folders.
NEW: The new "Background Instruments" and "The Other Hand" items in the Songs
     section of the Settings screen will control how the parts that you don't
     elect to play (via the simple song view) will be handled.
NEW: Synthesia will now prompt you before leaving a song early if you've already
     earned points. (Control with advanced "Gameplay.ConfirmEarlyExit" option.)
NEW: Track colors for left/right/both hands are now set automatically. The left
     hand is always blue. Right/both is always green.  Disabling the 
     Gameplay.SimpleReplaceColors setting in the config tool will prevent this.
NEW: Gameplay.AutoShiftToBestOctave advanced setting can now be disabled to
     suppress the smart octave shift behavior whenever you change song settings.
NEW: A "Notation.ShowUserNotes" advanced setting to hide user sheet music notes.
NEW: Drag-pan the paused song, shimmy the keyboard when zoomed in, or scroll
     through the song list. Best when used with touch-screens.  Disable using
     the "System.DragPanning" advanced option.
NEW: Error count is now reset if you rewind to the very beginning of song.
NEW: Double-click in falling note area to pause or resume the song.
NEW: The song list now scrolls smoothly instead of going page by page.
CHG: Increased the window of time given to hit a note correctly.
CHG: Input is now echoed to output devices on every screen (though the software
     keyboard only works in the Music Devices section of Settings and Play).
CHG: The on-screen keyboard now shows user input, even while paused.
CHG: Middle-C note marker has been replaced with every-octave labels on C.
CHG: Shortcuts can now have eight bindings, up from three.
CHG: The "Do Nothing" choice for the "Notes Outside My Range" setting has been
     removed.  The default is now "Play them for me".
CHG: The percussion icon option is now tri-state: always shown, only when
     playing percussion, or never shown.
CHG: Removed "Keyboard Height" setting. Small keyboard ranges now always have
     their height limited.
CHG: Flattened the included song groups in the song library a little.
CHG: Hard resets are now disabled by default.
CHG: Metronome is now disabled by default.
CHG: Removed song library flags.
CHG: The "First Pieces" in the G Major Music Theory set no longer count as
     Learning Pack demo songs.  (Reverted from 0.8.3.)
CHG: Dropped the leading "0." part of the version number.
FIX: Touch-screens should no longer require two taps to "click" buttons.
FIX: Hang when zoom to "Visible Song Notes" in songs with any C0, C#0, or D0.
FIX: Strange control characters could make text boxes behave strangely.
FIX: The FPS display is now larger and easier to read against busy backgrounds.
FIX: Finger hints can no longer be added to notes on hidden tracks.



Version 0.8.3 - 04/2012
-----------------------
NEW: The song progress screen gives you a clear path and set of goals for every
     song that has a left/right (or both) part defined.     
NEW: The song library has been updated to support hierarchical groups of songs.
     Navigate groups using the "breadcrumb" display at the top of the screen.
NEW: Reworked play screen to maximize usable area.  Much cleaner now. Use the
     Gameplay.PinMenuDrawerOpen setting to disable the auto-collapsing menu.
NEW: Synthesia auto-associates the synthesia:// URL scheme and understands URLs
     that match the synthesiagame.com/wiki/Synthesia_Manual#Synthesia_URLs spec.
NEW: Added Ash's Exercises: a set of scales and arpeggios with finger hints.
NEW: Some error messages can now direct you to the Synthesia website to obtain
     more information and solutions.
NEW: Melody practice scores are now submitted automatically to the Synthesia
     website.  (Disable via the options screen.)  Practice scores are generally
     private/anonymous, though if you've ever submitted a recital score using
     your Synthesia Online account, graphs and charts showing your progress will
     be available on the website.
NEW: The screen you were on last (up through track settings) is recalled the
     next time you start Synthesia.
NEW: Keybind to exit Synthesia (like an Alt-F4 you can bind to your MIDI device)
     not set to anything by default.
NEW: Songs from a particular folder can now be hidden without removing that
     folder from the folder list, to quickly hide and show songs conveniently.
NEW: Added a fourth "Very Quiet" metronome volume option.
NEW: Added advanced settings to optionally send GM/GS/XG Reset SysEx messages
     whenever the device is reset (between screens).
NEW: Added a key bind to reset falling note squish/stretch. Unbound by default.
CHG: All of the "First Pieces" from the G Major Music Theory song set now count
     as Learning Pack demo songs and allow all Learning Pack features!
CHG: Don't show the loop stats window when no tracks are played by the user.
CHG: Removed dependence on d3dx9_42.dll in Windows.
CHG: The time between device-unplug checks can now be set with the advanced
     "Midi.DeviceCheckMilliseconds" setting in the config tool.
CHG: Relaxed rhythm practice / recital note timings a little bit.
CHG: Added 18 browser/media extended keys that will be recognized in the key
     binding screen (on Windows).  These will no longer generate bad text input
     in text boxes, too.
CHG: Added secondary key binding defaults for "Menu Continue" and "Menu Back",
     set to Browser Forward/Back, should your keyboard have those keys.
CHG: Improved the visual effect that occurs when unlocking the Learning Pack.
CHG: Synthesia online account passwords will now persist for the entire play
     session (or until you switch users) even without checking "Save Password".
CHG: The sign-in flow for recitals using Synthesia online account users has
     been improved a bit.  Passwords are checked before playing the song now.
CHG: Recital scores are now shown together with rhythm practice scores.  To see
     online scores from other players, use the button to launch your browser.
CHG: Removed "PlaySettings" value from the --on-startup command-line option
     because the Play settings screen no longer exists.
CHG: The "Toggle All Notes Hidden" feature (F5 by default) no longer hides the
     sheet display.  You can use this now to show only the sheet music.
CHG: All Synthesia-related programs are now digitally signed by Synthesia LLC.
FIX: Tooltip backgrounds were displaying incorrectly.
FIX: Ignore Windows/Context menu keyboard keys in search boxes and key bindings.
FIX: In certain cases, non-note events were being duplicated (exponentially)
     depending on the complexity of a song.
FIX: Synthesia will now run correctly even if files are hidden in the Synthesia
     data directory.
FIX: Entering a folder without the required permissions in the "Add Folder"
     screen will no longer cause the folder list view to become corrupt while
     inspecting subsequent folders.
FIX: Don't crash when notes outside A0-C8 come in while sheet is displayed.
FIX: The song title is now always shown when launching with "--on-start Play".
FIX: Interacting with an invisible finger hint interface in the top-left corner
     of the screen (outside of finger hint mode) could corrupt finger hints for
     the current song.
FIX: SysEx on Windows wasn't being sent to output correctly in 0.8.2.



Version 0.8.2 - 11/2011
-----------------------
NEW: Key binding screen (off the Options screen) that will let you bind keys,
     mouse clicks, or MIDI input (including notes, controller events, program
     changes, and pitch-bend wheel) to any game function.  Combine any of those
     with the Ctrl key to do even more.
NEW: Many dramatic improvements to the sheet music display.  This came at the
     expense of the scrolling display mode (page flip is the only display style
     now) and the "Space out all sheet music notes uniformly" option, but this
     paves the way for the upcoming multi-line sheet display.
NEW: Windowed mode is now available on the Mac.
NEW: Preferred input and output devices will be remembered between sessions.  If
     a device isn't available one run, it won't be completely forgotten the next
     time Synthesia is started and it's available.  Boundaries and lighted key
     mode are also saved per-device instead of having a single global setting.
NEW: Click the dot in front of a song's title in the library to show a menu of
     flags you can assign.  Use flags for whatever and sort by that column too!
NEW: Song Library song previews can now be navigated via the new scrubber.
NEW: Quickly jog through the song with your pitch-bend wheel.
NEW: Search specific fields in song library by using colons. To find songs by
     Bach, use "composer:Bach".  Available fields are title, subtitle, folder,
     composer, arranger, copyright, license, and tags.  Each term now uses the
     AND operator by default.  An (all capital) OR operator is available.  To
     exclude terms, prefix it with a -.  So "composer:Bach OR composer:Mozart
     -remix" will find all songs by Bach or Mozart that aren't remixes.  The
     extended fields like arranger, copyright, and tags can be added with the
     synthesia-metadata-gui found at code.google.com/p/synthesia-metadata-gui.
NEW: If your keyboard uses a non-standard channel for light input (e.g., the
     LK-55 uses Channel 4 only) you can now set that via the last option on the
     keyboard settings screen.
NEW: Assign a hand to each track in the advanced view of the track selection
     screen to enable the simple view on subsequent plays.
NEW: Help button on the song playback screen (default shortcut: F1).
NEW: Select a watched folder from the drop-down list on the song library screen
     to narrow down your library results.
NEW: Songs you no longer want can be sent to the Recycle Bin or Trash via a new
     button on the Song Library screen.
NEW: Fun visualization for song previews in the Song Library.
NEW: Ctrl-clicking the speed up/down buttons now changes speed by 1%.
NEW: Extend loop bounds by a bookmark at a time with Ctrl+"," and Ctrl+".".
NEW: Ctrl-click in the timeline to quick-add/remove bookmarks.
NEW: Advanced Midi.InputChannel option to force single-channel input.
NEW: Advanced Midi.ResetBankSelect option to cause between-screen resets to also
     send a "Bank Select 0" message to all 16 MIDI channels. (Some devices don't
     reset their banks the way they're supposed to.)
NEW: Advanced Midi.ResetVolume option to cause between-screen resets to also
     send a "Volume 100" and "Expression 127" message to all 16 MIDI channels.
     (Some devices don't reset their volume the way they're supposed to.)
CHG: Maximized Window is now the default video mode on both platforms.
CHG: Song library can now handle huge numbers of songs with no slow-down and
     no longer has to re-populate when returning from a different screen.
CHG: Black keys are now offset correctly like real keyboards. (F# and C# shifted
     a little to the left, Bb and Eb shifted a little to the right.)
CHG: The "No Input Device" selection has been removed.  In the absence of other
     devices, the software keyboard is always selected by default.
CHG: Reworked song library folder management so it's nicer, easier to understand
     and faster to edit.
CHG: Pausing a song no longer pops up any overlays that obscure falling notes.
CHG: Song title shown at the beginning of play is now quite a bit fancier.
CHG: The time/measure tooltip always shows when hovering over the song timeline.
CHG: When device changes occur during play, the warning is now more explicit. ;)
CHG: On the Mac side, the included songs are now built right into the app bundle
     to make installation simpler.  If you want to mess around with the songs or
     whatever, you can find them in the bundle at Contents/Resources/music.
CHG: The Mac Ctrl+Click = Right-click behavior is now off by default.  Enable
     using the System.MacCtrlClickForRightClick advanced setting in config tool.
CHG: The "Gameplay.LoopMaxErrors" option now works in rhythm practice, too.
FIX: Unplugging/plugging in a device no longer crashes Synthesia!
FIX: Lighted keys now also shift correctly when using Z/X to change octaves.
FIX: In rare cases, instruments would be detected incorrectly on the track
     settings screen.  This was caused by program change events in different
     tracks than the notes themselves.
FIX: Pickup measures will no longer cause the pre-song metronome to only make
     one or two clicks.  At least 5 seconds of clicking will always be generated
     and will continue to the first note of the song (instead of the first beat
     of the first measure, which is sometimes empty for a few beats).
FIX: Loops can now extend to the end of the final measure vs. end of final note.
FIX: Timeline now shows to end of final measure instead of just the final note.
FIX: The mouse-over finger-hint hand UI now updates correctly when keyboard zoom
     mode is changed instead of continuing to track where notes used to be.
FIX: Non-user notes that overlap correctly-played user-notes will no longer
     temporarily obscure your note sparks.
FIX: In rare cases, changing a track's instruments could sometimes cause other
     track instruments to misbehave in songs with more than 16 tracks.
FIX: Rare (ambiguous) event ordering in MIDI files could cause the second of
     two consecutive notes to appear very short, despite the spark effect
     still showing correctly.
FIX: There was a race condition that could prevent MIDI output from being sent
     until the following output event was also sent.
FIX: Hitting two same-pitch notes occurring at the same time will no longer
     count "Extra Notes" up incorrectly when concurrent chords are enabled.
FIX: Using the "Bring the notes to me" option under the keyboard size settings
     would sometimes prevent notes from being hit due to octave-shifts that
     stacked more than one of the same note on top of each other.
FIX: Fixed a few small mistakes in the finger hints for the built-in songs.
FIX: Rare interleaved same-note input (press, press, release, release) from
     certain keyboards will now correctly pass both releases to output.
FIX: Changing pages in the song library by grabbing the scrollbar will now no
     longer cause the current song to be deselected.
FIX: Using the folder shortcuts in the Add New Watched Folder window will no
     longer require you click "Go up a level" twice in order to actually go up.
FIX: Ignore invalid key signature events (show C Major instead of "Unknown").
FIX: Alt-Enter no longer toggles from full-screen (in DirectX on Windows) to
     a mostly-broken windowed mode.



Version 0.8.1 - 06/2011
-----------------------
NEW: Edit note finger hints by clicking and dragging from notes to fingers
     in the new Finger Editing pause mode (shortcut 'N').
NEW: All 100+ songs included with Synthesia now include finger hints.
NEW: "Strict" melody practice.  On by default.  Stops the song whenever
     bad notes are played.
NEW: Simple track settings.  When a song only has two tracks (excluding
     percussion) an easier to use screen will display instead of the usual
     track settings screen.  This can be disabled via the options screen.
NEW: Got confirmation that the LK-220 and LK-270 lights work the same as the
     LK-230.  Added them to the compatibility list on the setup screen.
NEW: Added "Metronome.Channel" advanced setting to override metronome output
     channel in case your device doesn't have a percussion kit.  This setting
     is zero-based.  So channel 10 is called 9.  Just subtract one.
NEW: Added "Gameplay.LoopMaxErrors" advanced option that will restart a loop
     in melody practice mode after a certain number of errors have accrued.
CHG: Changed "Avg Speed" stat shown in melody practice to "Actual Speed".  The
     average value of the speed control didn't really communicate anything
     interesting because the song stops and waits for you.  Instead the actual
     speed tells you what the song would have (on average) had to be playing
     at in rhythm mode to have taken the same amount of time, including the
     times the song was stopped waiting for user input.
CHG: Default note labels are finger hint numbers.  And label selections keep
     between playing demo / non-demo songs, even without a Learning Pack key.
CHG: Searching in the song library is better.  Order doesn't matter anymore
     and you can start a word with a dash to exclude songs with that word.
CHG: The "concurrent chords" option is now enabled by default.  With the
     various settings for handling notes outside your keyboard's range, it
     makes more sense to be on than off.
CHG: Split a few gameplay options off into a melody practice-specific section
     in order to clean up the wording a little.
CHG: Got rid of the weird "sometimes on top" window behavior in Windows.  Now
     the window will always behave like any other window.
CHG: Increased the 50ms extra loop rollback (from 0.8.0) to 100ms.
CHG: Online recital rows in scores.xml now have a "recital" attribute to set
     them apart from rhythm practice scores.
FIX: Notes starting within an extra loop rollback amount of time from the end
     of a loop should no longer "catch" in melody practice.
FIX: Accidentals in the sheet display will now be assigned per-octave.
FIX: Don't show loops from practice in falling note area during recital.
FIX: Crash message is now appended to the end of the log when errors occur.
FIX: Handle the case where (some version of) Trebuchet MS is available but not
     the "Regular" version in Windows.
FIX: The currently visible keyboard range will now follow the active range
     in "Zoom to my keyboard" mode after an octave shift (via Z or X).
FIX: Dates are now shown in your local time zone instead of GMT on Windows.
FIX: MIDI files containing no notes cause lots of problems.  Don't allow them.
FIX: A couple time signature problems have been corrected in "The Ants Go
     Marching" and "Mexican Hat Dance".  An extra note has been removed from
     "Toccata and Fugue in D minor" and "Sonatina Piccolina".  Thanks go to
     DamienBlack from the forums for the fixes!
FIX: The on-screen "praise" text for a note (Good, Great, Barely, etc.) should
     no longer cause frame-rate stutters on older computers after the first
     time they're displayed.
FIX: The SysEx ignore option was being ignored for MIDI files loaded from the
     command-line, dragged in, or started via right-click desktop shortcuts.
FIX: SysEx messages are now always sent before any other events at the same
     timestamp.  Sometimes resets were nondeterministically going through
     after things like program change messages at the beginning of a song.
FIX: Don't count MIDI channel 16 as a percussion channel.
FIX: Ironed out some of the selection quirkiness in the song library.
FIX: A couple of key signature problems have been corrected in "The Ants Go
     Marching" and "Evening Falls".  Thanks go to GoPlus from the forums!
FIX: The F10 key no longer inadvertently prevents drawing in Windows.
FIX: The metronome now correctly triples the number of beats during compound
     time signatures when running at double-speed.  (Now a misleading name).
FIX: When showing the software keyboard mapping labels on notes or the
     keyboard, they will no longer show incorrectly when shifted all the way
     off the keyboard on the low side.
FIX: Tooltips will no longer sometimes show in a bad position during the first
     frame they're visible.
FIX: Window is now centered correctly in DirectX mode running windowed.



Version 0.8.0 - 11/2010
-----------------------
NEW: Profiles.  Create from the title screen.  Names are shown on scoreboards.
NEW: Online Recital: plays song straight through at constant 100% speed (no
     fast-forward or rewind, either).  Scores posted online!
NEW: Keyboard zoom settings, key/note labels, and sheet progression mode have
     been moved to the play screen and can now be changed during the song.
NEW: Buttons to look at scoreboards before playing.  This replaces the old
     "Highest score for this configuration" on the track settings screen.
NEW: If no tracks set to "Played by You", continue button skips right to play.
NEW: The program window can now be minimized when running in windowed mode.
NEW: Advanced config option (Gameplay.ShowFloatingText) to hide both the combo
     counter and praise text that shows on top of the falling notes.
CHG: Mode renames: practice is melody practice.  rhythm is rhythm practice.
CHG: Play screen toolbar buttons are now more compact.
CHG: Made track setting screen tooltips a little less verbose.
CHG: New logo.
CHG: Now that extra practice time is shown next to the current time (in green)
     it makes more sense for the current time to always show the absolute
     song position instead of the position + extra practice time.
FIX: Removed a few lingering "You Play" references in favor of "Played by You".
FIX: User-played notes will no longer hang endlessly when playing two tracks
     with the same note at the same time.
FIX: Loops will now jump back 50ms further than the beginning of the loop to
     avoid skipping notes starting right at the loop boundary.
FIX: Using certain combinations of key/note labels could produce incorrect
     or distorted labels on one or both.
FIX: DirectX viewport was off by one pixel.
FIX: A few rare zoom/track setting combos would make the keyboard disappear.



Version 0.7.5 - 10/2010
-----------------------
NEW: In-game clock shows system time (just under the quit button).
NEW: Mac version of SynthesiaConfig tool.  Supports default full-screen, custom
     full-screen, and changing manual settings.  Windowed mode will come later.
NEW: The scoreboard a performance is mapped to now has nothing to do with the
     MIDI file the notes came from.  You should be able to edit background
     tracks or make other MIDI changes.  So long as those changes don't impact
     the timing, number, or pitch of "You Play" notes, your score should
     continue to show up on the same scoreboard it always has.  NOTE: This
     change has caused a FULL SCOREBOARD WIPE from previous versions!
NEW: Added missed note count to the bottom of the screen stats in rhythm mode.
CHG: Song library list now uses a "paged" style (like an Internet search)
     instead of a list with scrollbar.  It can now handle libraries of a much
     greater size now without slowing down.
CHG: Setup Tracks screen is now laid out differently and has more options.
CHG: Rhythm scoring changes in "held points" and timing accuracy.
     See: http://www.synthesiagame.com/wiki/index.php?title=Scoring
CHG: Practice scoring no longer takes into account speed at all.
CHG: Included music has now been quantized and cleaned up for scoreboard play.
     Errors in several songs were corrected.
CHG: Loop timer will no longer start in practice mode until you hit a note.
CHG: The bank-select fix option now affects all platforms (not just Vista
     and OS X).  Some keyboards were also affected by the problem, so this lets
     them take advantage of the fix, even on something like Windows XP.  It
     should also be able to filter bank select messages out more efficiently.
CHG: Mac version now behaves a little differently with respect to the dock and
     system menu.  Including support for custom full-screen modes has prevented
     both from being available while running on the primary display.  When
     windowed support is added, the "windowed & maximized" setting will over-
     come this limitation.
cHG: Updated the main program icon for Synthesia and the config tool.
FIX: Pedal input events are now sent out on all You Play channels instead of
     just the most recently matched You Play channel.
FIX: In rare cases, certain MIDI songs wouldn't load with the "Use a unique
     channel for each track" option introduced in 0.7.4.
FIX: Hide software keyboard key/note labels when "You Play" no tracks.
FIX: Very long note blocks would incorrectly appear in specific, rare cases.
FIX: Folder names with periods now display correctly in the song library.
FIX: Try to catch another class of "Error document empty" problems.



Version 0.7.4 - 09/2010
-----------------------
NEW: Movable 'Do Re Mi' key and note labels.
NEW: English note label spellings will now be based on the song's current
     key signature instead of always showing sharps.  This includes the use of
     double flats (bb) and double sharps (x).  E.g., In Gb Major, an A is Bbb.
NEW: Added support for lighted keyboards.  Notably, shows upcoming notes in
     practice mode.  Otherwise, mirrors behavior of spark effect.
NEW: Windowed mode and ability to use a video mode that isn't your desktop's
     current video mode.  Use the new configuration tool start menu shortcut.
NEW: Added --bookmark-count command line argument.
NEW: Advanced option to disable MIDI device "hard resets".
NEW: Stats are shown for the previous few loops on top of current/best.
NEW: Button to enter loop editing mode to make it more discoverable.
NEW: Loop score is now shown in rhythm mode (similar to practice loop stats).
NEW: Fine-tune loop by dragging boundaries in play area.
NEW: Tooltip showing song time/measure when navigating the timeline.
CHG: Loops will now snap to the current song position during creation.
CHG: Loops are much more visible in the song timeline.
CHG: Holding notes will now generate 5x the points. (250/sec vs. 50/sec)
CHG: Key and note labels are now larger and easier to read.
CHG: All settings are now stored in either "shell:appdata\Synthesia" in Windows
     or "~/Library/Application Support/Synthesia" in OS X.  Data is no longer
     stored in the Windows registry or Mac plists.
CHG: Pop-up loop statistics are now reset when the song speed is changed.
CHG: A few more default track modes are now available on the options screen.
CHG: Fixed-do "Sol" now appears as "So".
CHG: Removed --windowed option in favor of new configuration settings.
CHG: Removed renderer option from in-game options.  Now in configuration tool.
FIX: Uninstaller wasn't cleaning up Start Menu shortcuts on Vista or Win7.
FIX: Multiple spaces in any of the game's XML files were being condensed into
     one space when read back in.  This could cause any variety of things to
     go wrong depending on the file name or MIDI device that had more than one
     space in its name.
FIX: Output device resets should be faster and more robust against crashes.
FIX: Loops that start at the beginning of the song should no longer skip notes.
FIX: Filtering the song library should no longer cause sorted items in the list
     that are the same (as far as the currently sorted column is concerned) to
     jump around the list relative to one another.  (Sorting is now "stable".)
FIX: Non-rounded-to-10% speeds are now remembered correctly when loading a song.
FIX: MIDI input no longer builds up on screens where it's not consumed only to
     create a burst of sound after switching to a screen where it is.
FIX: In rare cases, instrument changes would affect other tracks.
FIX: Learning Pack unlock keys should now be able to be pasted from any program
     on the OS X side... including the ones I broke during the last fix. :)



Version 0.7.3a - 08/2010
------------------------
FIX: Fixed a hang in the song library involving page up/down.



Version 0.7.3 - 08/2010
-----------------------
NEW: Metronome.  Control it with the "Metronome Settings" button during play.
NEW: Change a track's instrument by clicking it on the track settings screen.
NEW: Added a filter box to the song library.  Type words to narrow results.
NEW: Use the '<' and '>' keys to create automatic loops between bookmarks.
NEW: Added --loop-start and --loop-end command line parameters.
NEW: Periodic check for new versions shown on the title screen if found.
NEW: Synthesia will attempt to distribute tracks using the same MIDI channel to
     separate channels where possible.  This allows track instrument changing to
     work in certain cases.  Can be disabled via an Advanced option.
NEW: While using the --copy-score command in practice mode, each loop will write
     a comma-separated list of extra milliseconds and extra notes.
CHG: The clipboard output while using the --copy-score command in practice mode
     is now a comma-separated list with score, extra milliseconds, extra notes,
     and overall percentage of time notes were held vs. total holdable time.
CHG: Track previews now loop continuously.
CHG: Removed the 10 music samples from Game Music Themes.
CHG: Replaced the two Learning Pack demo songs from the Game Music Themes set by
     two songs from the G Major Music Theory set of songs. 
CHG: Updated many items on the options screen to use a simple checkbox.
CHG: Score now updates faster while holding a note in rhythm mode.
CHG: Measure lines in the falling note display are now a baseline feature that
     no longer requires the Learning Pack.
CHG: Support for any resolution 800x600 or lower is now deprecated.  It will
     continue to run, but the experience won't be optimal.
FIX: Made the "Zoom to my Keyboard" button appear for software keyboard users
     that have never set up the size of an actual MIDI device.
FIX: The last measure line at the end of a song should now be more accurate.
FIX: Flush the output queue before resetting output device on OS X.
FIX: Note names shown on the keyboard setup screen now show the correct octave.
FIX: Learning Pack unlock keys should now be able to be pasted from any program
     on the OS X side.
FIX: Attempting to load a song that has a time signature with a 1 (whole-note)
     in the denominator will no longer cause a crash.
OPT: Increased speed of drawing measure lines in the falling note view.
OPT: Increased speed of drawing effects, keys, and notes.



Version 0.7.2 - 06/2010
-----------------------
NEW: Loop/repeat sections.  Right-click-drag the timeline to create one.
     In practice mode, extra statistics are shown while inside loops.
NEW: Use the 0 through 9 keys to quickly jump between bookmarks.
NEW: Set your keyboard size and mode from the Keyboard Setup screen.  This lets
     you choose from a few different ways to handle notes outside your range.
NEW: The "Zoom to my Keyboard" mode is now available after setting the size of
     your keyboard and choosing an appropriate mode from the same screen.
CHG: Holding notes longer now increases your score!  This also works with the
     sustain pedal.  Impact to practice mode scoring is discussed here:
     https://www.synthesiagame.com/forum/viewtopic.php?t=1821&p=10949#p10949
CHG: Improved the auto-offset detection code used to find the best octave to
     start the song at with keyboards smaller than 88 keys.
CHG: The maximum score multiplier has been reduced from 5.0x to 2.5x.
CHG: The pre-multiplier points earned for a note are now a flat value instead
     of being based on how accurately timed the note was played.
CHG: Show a notice below the Practice Mode button if no You Play tracks picked.
CHG: Made the checkbox graphic a little nicer to match the new radio button.
CHG: Updated a few "Back" buttons to say "Go Back".
CHG: If a song was selected from the Learning Pack demo songs, the menu system
     will route back there instead of the Song Library when backing out.
FIX: Some devices were still causing a crash due to device resets coming too
     quickly on the song library screen while scrolling with the keyboard. Now
     the library is more responsive while simultaneously inserting a longer
     pause between device resets.
FIX: Ctrl+left click is now correctly treated as a right-click in OS X.
FIX: The black key above the last available software keyboard note will no
     longer appear to also be available.
FIX: Device resets could cause certain devices to report an error.
FIX: "You Play, Muted" tracks are now considered for "Zoom to 'You Play'".
FIX: Rewinding a song no longer corrupts your average speed statistic.
FIX: Added an option to discard notes that never end in MIDI files.  Enable
     this if you see a key that is stuck pressed down with sparks forever.
FIX: The ancient QuickTime bug now has a work-around!  If your MIDI songs go
     silent after some time while using the built-in QuickTime synth on the Mac
     turn the new "Discard Pedal Events while using QuickTime synth" option
     in the advanced section of the options menu.
FIX: The last played song will no longer scroll off the screen due to changes
     in the song library list (notably just after entering the library).
FIX: Corrected one-frame label flickering between changes in keyboard setup.
FIX: Don't crash when text is pasted into the LP screen with non-ASCII in it.
FIX: Labels with rapidly changing text (e.g., keyboard setup input preview)
     will no longer incorrectly disappear until the next change.


Version 0.7.1 - 05/2010
-----------------------
NEW: Song Bookmarks.  Click "Edit Bookmarks" button and then click in the left
     margin of the falling notes.  Use the buttons to navigate.
NEW: You can now click the on-screen keyboard to play notes that may be outside
     the range of your input device.  This is fun on a touch-screen.
NEW: Added speed and song position controls to playing screen.
NEW: Song timeline is now clickable to navigate song.
NEW: The sustain pedal can now be used while playing.  It will hold notes
     "open" in the falling note display longer.
NEW: Added helpful tooltip messages while hovering over certain UI elements.
NEW: Added "HKCU/Software/Synthesia/FPS Limit" string key.  Set to an integer
     to prevent the game from rendering more than that number of frames per
     second.  This is especially good at reducing CPU usage.
NEW: You can now mouse-wheel scroll through the song while it's paused.
NEW: Option to import "markers" stored in MIDI files as song bookmarks.
NEW: Unknown crashes in Windows now produce a mini-dump on the desktop.
NEW: Option under 'Advanced' (in OS X only) to ignore leading NULL bytes in
     device input.  This may improve compatibility with certain MIDI adapters.
NEW: Installer option to add a "Send To" right-click item to "Synthesia Music"
CHG: Synthesia is now built against the Feb-2010 version of DirectX.
CHG: The options screen will now fill any available screen height.
CHG: Sheet music notes will now be placed on the "correct" staff much
     more often based on the rest of the notes in that track.
CHG: In practice mode, "Played Automatically" that start at the same time
     as a "You Play" note will no longer sound until you hit your notes first.
CHG: Instead of single-letter searching in the Song Library, you can now
     continue typing to search for complete song names.
CHG: Page-up and page-down can now be used to page through the Song Library.
CHG: In the Song Library pressing enter just after a new song is selected (and
     still loading) will jump to the next screen when loading is complete.
CHG: "Fixed Do Note Names" are now referred to as "'Do Re Mi' Note Names".
CHG: You can now start songs (first time only) by playing any note.
     only) by pressing any note on your keyboard in addition to space bar.
CHG: Improved the "X songs found" visual cue on the Add Watched Folder screen.
CHG: Updated 3 more of the songs in the Harder folder to have split left and
     right hand parts.  (Thanks again Choul, Rickeeey, and TieDyeGuy!)
FIX: Added a short delay between successive song previews on the Song Library
     screen.  Previewing too quickly sent device resets faster than some
     devices were able to handle.
FIX: Corrected some drawing artifacts that occurred with ATI cards in DirectX.
FIX: Scores above 1M will no longer show in scientific notation.
FIX: All non-note events in You Play tracks are now passed through to the
     output device.  (Before only program change messages were.)
FIX: Right-click "View in Synthesia" association now sets percussion tracks to
     "Played But Hidden" instead of "Played Automatically".
FIX: The song length was being calculated incorrectly in some rare cases.  This
     led to the game stopping before the final notes were finished sounding.
FIX: Attempt to overcome errors while loading bad events in MIDI files.
FIX: Show text even when 'Trebuchet MS' font isn't installed (under Windows).
FIX: Selections in lists will now always appear fully on-screen.
FIX: Adding a CD or USB drive as a watched folder will no longer cause a crash
     when there is no CD in the drive or the USB device is removed.
FIX: Number of special folders/drives shown on the Add Watched Folder screen is
     now limited to the first nine found.
FIX: Stopped text and texture flicker at the first frame of every screen.
FIX: Prevent multiple instances from running concurrently.
FIX: The entire keyboard is now shown (without shading) when no tracks are set
     to 'You Play' regardless of selected input device.
FIX: Always show Practice Mode button, even if no tracks are set to "You Play"
     mode.  That way the rhythm/practice setting doesn't reset on you. 
FIX: Clicks from tablet/pen devices are now handled correctly again.


Version 0.7.0 - 09/2009
-----------------------
NEW: The sheet music view now contains rests.
NEW: Practice mode scoring.
NEW: Added option to toggle "concurrent chord notes" in practice mode.
NEW: Added option to toggle the "next note" markers in practice mode.
NEW: Added option to display English note names in rainbow colors.
NEW: Added option to toggle constant-speed song scrolling by adding
     extra space between notes.
NEW: Added measure numbers to falling-note-display measure lines.
NEW: Add a string key named "HKCU/Software/Synthesia/Fixed Do Note Names"
     and set its value to a set of 12 names all separated by exactly one
     space to override the default Anglo-Saxon Solfege names.  For reference
     the default is: "Do Di Re Ri Mi Fa Fi Sol Si La Li Ti".  Currently, this
     will not work with non-ASCII values.
NEW: Built-in "Song Library" with "Watched Folder" list, auto-preview, and
     rating/difficult controls.  The old "File Open" boxes have been removed.
NEW: Instrument icons on the track selection screen.
NEW: Synthesia can now read and make use of additional metadata provided by
     .synthesia metadata files.  There is a free editor. See the open-source
     project at: http://code.google.com/p/synthesia-metadata-gui/
NEW: Added 26 new songs, updated 109 to split the left and right tracks.
     (Thanks Choul, Rickeeey, and TieDyeGuy from the forums!)
NEW: New graphics littering the interface.
NEW: While using a Learning Pack demo song various animated cues will appear
     on certain screens, highlighting Learning Pack features.
NEW: Keyboard setup screen with fun preview areas.
NEW: Percussion icons if a percussion track is set to "You Play".  Can also
     be set to always-on from the options screen.
NEW: Windows command-line options.  Type "Synthesia.exe --help" to see them.
NEW: Windowed mode (Win32 OpenGL only) via command-line.
NEW: Press F5 during gameplay to toggle hiding all notes and sheet music.
NEW: Hold the tab key to adjust the speed by 1% at a time instead of 10%.
NEW: Number of note "errors" is now shown during play.
NEW: Added quit button to gameplay screen so you can interact mouse-only.
NEW: Huge overhaul in the font rendering portion of both graphics back-ends,
     as well as some new much-needed flexibility in texture loading.
NEW: Added "Note Window Length" and "Note Window Length After First" settings
     to fiddle with the input window that controls which notes are considered
     part of the same "concurrent chord notes" or not.  The values are in
     microseconds.  The defaults are 165000 and 95000.
CHG: Note labels have been moved to the "head" of notes and had their
     readability improved by adding a contrasting background.
CHG: The performance of Key/Note labels has been improved dramatically.
CHG: Note labels should no longer appear "jumpy".
CHG: Added two new Learning Pack demo songs.
CHG: Title screen update.
CHG: Improved the beginning-of-gameplay keyboard shortcut graphic.
CHG: Input is no longer muted on score screen, play settings screen, or while
     the game is paused.
CHG: The score screen has been significantly revamped.
CHG: The size of the sheet music display is now saved between songs.
CHG: Duplicate scores on the scoreboard will now be ranked the same.  So, the
     following scores would be ranked #1, #1, #2: 200 200 195.
CHG: Removed startup "device list open test", obsoleting the need for the
     "Skip Device Open Test" registry setting.
CHG: Don't show empty slots on the scoreboard.
CHG: Allow MIDI Type-0 files containing more than one track.  They're surely
     non-conforming, but we may still be able to load it.
CHG: The log file now includes date/time for every entry.
CHG: Made the title screen device input preview box always-on.
CHG: Added a silly particle burst effect when Learning Pack key is pasted.
FIX: In rare cases, spacing in the sheet music display may have been
     incorrect so a note would sound before/after the cursor was directly
     hovering over it.  All notes are now placed in the correct position.
FIX: Very short filenames no longer cause a crash.
FIX: Mac device input drivers that sometimes report more than one event at the
     same timestamp will now be handled correctly.
FIX: Crash after opening 255 songs fixed.
FIX: Channels that are re-used later in a song with a different instrument now
     no longer prematurely send the later-used instrument change message.
FIX: Unicode characters in names shown on the Learning Pack display correctly.
FIX: Made the file association option in the installer work in Windows Vista.
FIX: Don't crash if the track settings or saved scores become corrupt.
FIX: Switching input devices after playing a song using the software keyboard
     will no longer cause the software keyboard's octave shift to be applied
     to the new input device.
FIX: Attempt to prevent screensaver and monitor power-off events in Windows.
FIX: If the DirectX renderer has trouble, causing the game not to start, switch
     to the OpenGL renderer for the next run.
FIX: Note blocks for multiple Note-Ons for the same note on the same channel
     are now displayed correctly.
FIX: MIDI Meta events that arrive from input devices will no longer cause
     a program crash.  They are still reported in the extended (F7) log output.
FIX: Added option to relax output device reset (so it doesn't perform a full
     device close/re-open).  Set the following string key to a value of "1":
     "HKCU\Software\Synthesia\Disallow Hard Device Reset".
FIX: Cleaned up a really old bug that caused new, never-opened songs to inherit
     the track settings from the previously-opened song (vs. getting assigned a
     default set of track settings).


Version 0.6.5 - 09/2008
-----------------------
NEW: Note Labels option on the Play Settings screen.
NEW: Resize sheet music display with F3 or by dragging border with mouse.
NEW: Name of the current song key displayed down in status area.
NEW: 120+ new songs from gmajormusictheory.org included in the release.
NEW: Added a marker to the "middle C" keyboard key.
NEW: Mouse auto-fade after a few seconds of no movement.
NEW: Pause/Resume button in the bottom right corner of the gameplay screen.
NEW: Enhanced the keyboard display with a red strip of felt.
CHG: Changed the appearance of various windows and buttons a little.
CHG: Pushed MIDI output to a separate thread, which should improve performance.
CHG: Game startup should be a little faster when loading large songs.
CHG: Toggle "Full Debug Output" with F7.  If you're running into a repeatable
     problem, it may be useful to run the game with full debug output on before
     sending me the log from the run containing the problem.
FIX: Notes from "You Play" tracks should always appear above other notes.
FIX: Practice mode "next note" markers no longer appear at staggered times
     when more than one note exists at the same time.
FIX: Practice mode "next note" markers are now always removed properly when
     rewinding at low speeds.
FIX: Controller, after-touch, and pitch bend events are no longer sent to
     the output device for "You Play" tracks.
FIX: Notes can no longer be skipped in practice mode at high speeds.
FIX: The "next note" marker is now shown for all notes that can be hit while
     waiting for user input, not just notes directly on the line.
FIX: Track selection boxes can not longer run off the bottom of the screen.
FIX: Sheet music button on track selection screen is much easier to see now.
FIX: Practice mode can no longer be selected when no tracks have been set
     to "You Play" mode.  A helpful message is indicated instead.


Version 0.6.4 - 06/2008
-----------------------
NEW: Sheet music display with scrolling and page-flip progression modes.
NEW: Practice mode that waits for you to hit the right notes.
NEW: Measure lines in falling note display.  (Toggle with F4.)
NEW: Learning Pack key entry screen (off the main menu) with four "demo"
     songs that temporarily unlock all the new features.
NEW: Added "Play Settings" screen to handle the growing set of song options.
NEW: Added option to lock keyboard height to conserve screen space for notes.
CHG: Game continues to play in the background if alt-tabbed or minimized.
CHG: Added the old "Notes played" statistic to the playing screen (from 0.4.0).
CHG: Made "Play all user input" the default behavior.
CHG: Changed the vertical-guide layout for falling notes.
CHG: Added option to disable auto-"System MIDI volume" adjust in Windows.
FIX: Bounded max size of praise/combo text.
FIX: Removed un-openable MIDI input/output devices from device lists. (However,
     this requires a quick "open" test on each device at startup.  Some devices
     can take a very long time (>30s) to open.  So, the open test can be turned
     off via the "HKCU\Software\Synthesia\Skip Device Open Test" string key set
     to a value of "1".
FIX: Don't crash while FF'ing an event heavy song with certain output devices.
FIX: Caps-lock no longer affects octave shifting keys.
FIX: Windows installer now includes DirectX redistributable, so no more missing
     DLL errors.  Stand-alone zip users should run directx_redist/DXSETUP.exe.


Version 0.6.3 - 01/2008
-----------------------
NEW: Keyboard zoom options (on the Track Selection screen).
NEW: Options screen:
     - Play all user input / Play only correct user input.
     - Default track mode: Played Automatically / Played But Hidden.
     - Play notes using velocity from the: song / user input.
     - Toggle sparks for performance.
     - Toggle ignore SysEx messages.
     - Toggle bank select fix.
     - Toggle renderer backend in Windows.
NEW: DirectX rendering backend.
NEW: Better looking white keys.
NEW: Highest score for current settings shown on track selection screen.
NEW: Software mouse cursor.
NEW: Copy error text to clipboard before exiting.
NEW: Added an easter egg somewhere.  Try and find it!
NEW: Added log.  Found in "Application Data\Synthesia\log.txt"
CHG: Note scoring is now additionally based on timing accuracy.
CHG: Split all remaining "Various" tracks into single-instrument tracks.
FIX: Sometimes first note of "You Play" track would use wrong instrument.
FIX: Caps-lock no longer affects the software keyboard.
FIX: Windows crash from attempting to send output to a MIDI device too fast.
FIX: Made MIDI output reset stronger in Windows, to avoid locked-"on" notes.
FIX: Events using running status after a meta event weren't loaded correctly.


Version 0.6.2a - 09/2007
------------------------
NEW: Files with .kar extensions are now supported.
NEW: "You Play, Muted" track mode.
CHG: Renamed "stray notes" to "extra notes" and made them break the combo.
FIX: Only reset the MIDI output device after playing something through it.
     (In some cases, a reset takes upwards of one second.  This reduces
     how often that time hit occurs.)
FIX: Program change and channel pressure events are now sent correctly when
     using an external output device on the Mac.


Version 0.6.2 - 08/2007
-----------------------
NEW: High score list per-song, per-track-configuration.
NEW: Tracks that use more than one MIDI channel are now split into one-track-
     per-channel.  This makes almost every format-0 and even some format-1
     songs MUCH more playable.
NEW: Fast-forward and Rewind.  Press the left/right arrows to jog the song.
NEW: Software Keyboard.  Tries to guess the best starting octave to shift to
     based on the average location of all notes in "You Play" tracks.
NEW: Sparkle effect while holding down keys correctly
NEW: Track settings are remembered across game sessions
NEW: "Visible Only" track mode.
NEW: Mac version fades between the game and the desktop on start and quit.
NEW: Fade transition between screens.
NEW: You can override the window size with registry/plist string settings
     named "Window Width" and "Window Height".  Use whatever number you want
     in either string setting.
CHG: Gameplay starts out paused so you can get your bearings on input.
CHG: The software license Synthesia is released under has changed.  It is no
     longer the open-source MIT license, but rather a proprietary closed-
     source license.  No worries, the game is still free.
CHG: New keyboard mapping: view stretch is PgUp/PgDn, Speed is Up/Down.
CHG: Track selection screen is now sorted left-to-right by average note pitch.
CHG: Remember view stretch between multiple tries of the same song.
CHG: Remember octave offset between multiple tries of the same song.
CHG: Possible track modes are based on whether input and output devices have
     been selected.  e.g. "You Play" won't be available when input is disabled.
CHG: The falling note display runs much smoother (especially at low speeds).
FIX: SysEx MIDI messages in songs are now sent to output devices.
FIX: File Open dialog no longer pops under the game window in Windows Vista.
FIX: Bank Select events sometimes cause tracks not to play in Vista and Mac.
     Now on those platforms, bank select messages have been disabled.  If this
     causes problems, set a "Disallow Bank Select Fix" string in the registry
     or plist to anything other than "0" to stop the special behavior.
FIX: Pausing the game while holding keys down caused sound (in "You Play"
     tracks) and key images to "stick" after resuming gameplay.
FIX: Removed (poorly written, first-attempt at) multi-monitor OpenGL code to
     fix a crash for many users.


Version 0.6.1 - 05/2007
-----------------------
NEW: On the Mac, output to external devices is now available.
NEW: On the Mac, you can now drag a MIDI file to the application on the Dock or
     in Finder or right click a MIDI file and choosing "Open With..." to open.
NEW: In Windows, added a low-tech solution to choose between different monitors
     connected to the SAME video card (doesn't work in multi-video-card
     situations.) (Set the string key HKCU\Software\Synthesia\Monitor to "0"
     for primary monitory, "1" for secondary, etc.)
CHG: Mac OpenGL display now has v-sync enabled.
CHG: Mac game window is now much less obtrusive.  Other windows are allowed to
     be on top and the Dock and Application bar can both be made visible by
     hovering the mouse over there positions for a second or so.  The game
     window also no longer must be hidden during file selection or error boxes.
FIX: In Windows, MIDI SysEx messages in input are no longer flagged as errors.
FIX: On the Mac, fixed MIDI that used RPN / NRPN controller events (e.g. to
     set pitch bend) so they're now handled correctly.
FIX: On the Mac, output devices are now reset much harder than before, so
     output device internal state that may be set by one song isn't carried
     over to another.
FIX: On the Mac, there was a potential problem with some input devices that
     might send bursts of events all at once.  Previously, only the first
     event in the incoming list of events was recognized.  Now, any number of
     incoming events will be recognized correctly.
FIX: Picked a font for the Mac version to use that is actually a default
     system font.  (Apparently "Palatino" only ships with iLife now.)
FIX: On the Mac, fixed a problem where the (modal!) file open dialog could
     be hidden underneath the game window, leaving you not choice but to force-
     quit the program.
FIX: Disabled OpenGL depth testing to fix a problem where text would sometimes
     not appear above other controls (TrackBox, SongBox, etc.) in Windows.
FIX: Score state now displays correctly at low resolutions (like 800x600).
FIX: Title bar no longer pops when changing speed at the beginning of gameplay.
FIX: Text centering and placement on the Mac is now properly implemented.
FIX: MIDI files with non-all-lowercase file extensions can now be selected
     in the File Open dialog box.


Version 0.6.0 - 04/2007
-----------------------
NEW: Mac Version!
NEW: All new note and keyboard graphics!
NEW: All new menu graphics.
NEW: Right-click association option in installer.
CHG: Renamed and rebranded the project to "Synthesia"
CHG: Switched from base 2D OS drawing to 3D accelerated OpenGL drawing.
CHG: Moved status display to the bottom of the screen during play.
CHG: Made default music folder less imposing.  Now the game will only default
     to the directory the very first run.  Afterwards, it will remember the
     last file you attempted to play (like it used to).
CHG: Improved exception handling.
FIX: Don't crash if "Synthesia Music" folder doesn't exist.
FIX: No more crash sometimes when app regains focus on the title screen.


Version 0.5.1 - 02/2007
-----------------------
NEW: Your notes are played (in the correct instrument for the track)
NEW: Tooltips on all menu controls and settings.
NEW: 10 Sample songs from Game Music Themes.
NEW: "Stray Notes" metric on stats screen
NEW: "Average Speed" metric on stats screen
NEW: Box around MIDI input test on title screen
NEW: Combo counter and much improved stats display during play.
CHG: Improved Klavarskribo staff notation.
CHG: Match input to closest unplayed note's opportunity window center instead
     of matching against the first available unplayed note.
CHG: Swapped blue and yellow in the track color order, making blue the new
     "first" color.
CHG: ReasonableSynthVolume object replaces MidiCommOut::SetReasonableSynthVol
     and now works for all mixers in the system instead of only the first.
CHG: Darkened the border for a few different colors to increase the contrast
     between sharp/flat notes in a series.
CHG: Default to new "Piano Hero Music" folder at startup.  (User configurable
     in the future.)
FIX: Disabled MIDI input while game is paused to prevent cheating.
FIX: Made MidiCommOut::Reset() actually reset everything by fully closing and
     reopening the device.  midiOutReset() apparently only turns off the keys
     and pedals on each track.  It *doesn't* reset patches or volume.
FIX: Reworked MIDI engine to correct a sync/lag issue in songs that started
     with a considerable delay before the first note.
FIX: Notes don't draw on top of keys anymore.
FIX: MIDI track default color order is now consistent for all files.
FIX: Two tracks with identical notes would cause the "second" track's note to
     not appear.  This normally would not matter, as they overlap completely,
     but when hiding the first track, the second note would not show.


Version 0.5.0 - 01/2007
-----------------------
NEW: Klavarskribo staff notation (thanks to Troy Ramos for the suggestion!)
NEW: MIDI input instrument selection (early version by Luis Anton)
NEW: MIDI input with note matching and scoring (early version by Luis Anton)
NEW: Note hit/miss effects
NEW: If muted, temporarily unmute the selected MIDI device during gameplay
NEW: Level progress bar along top of game play screen
NEW: In-game open file dialog
NEW: Song finish screen with score, rating, and statistics


Version 0.4.0 - 10/2006
-----------------------
NEW: Initial Release

